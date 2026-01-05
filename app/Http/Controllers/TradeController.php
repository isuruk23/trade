<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use App\Models\Coin;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TradeController extends Controller
{
    
     public function index()
    {
        if(auth()->user()->kyc->status !== 'approved'){
            return back()->withErrors('KYC not approved');
        }

        $trades = Trade::with('user', 'coin')->orderBy('created_at', 'desc')->get();
        return view('admin.trades', compact('trades'));
    }


    public function tradeForm() {
        $trades = Trade::with('coin')
                       ->where('user_id', auth()->id())
                       ->orderBy('created_at', 'desc')
                       ->get();
        return view('user.trade', [
            'coin' => Coin::where('symbol', 'ETX')->first(),
            'trades'=>$trades,
        ]);
    }


    public function trade(Request $request) {
         // 1️⃣ FORM VALIDATION
        $validated = $request->validate([
        'coin_id' => [
            'required',
            Rule::exists('coins', 'id')
        ],
        'type' => [
            'required',
            Rule::in(['buy', 'sell'])
        ],
        'amount' => [
            'required',
            'numeric',
            'min:0.0001'
        ],
        'margin' => [
            'numeric',
            'nullable'
        ],
        'leverage' => [
            'required',
            'numeric',
            'min:1',
            'max:100'
        ],
    ], [
        'coin_id.required' => 'Invalid coin selected',
        'coin_id.exists' => 'Coin does not exist',
        'type.in' => 'Invalid trade type',
        'margin.min' => 'Margin must be greater than 0',
        'leverage.max' => 'Maximum leverage allowed is 100x',
    ]);

        $coin = Coin::findOrFail($request->coin_id);

        $wallet = Wallet::firstOrCreate(
            ['user_id' => auth()->id(), 'coin_id' => $coin->id],
            ['balance' => 0]
        );

        if ($request->type === 'buy') {
            $wallet->balance += $request->amount;
        } else {
            if ($wallet->balance < $request->amount) {
                return back()->withErrors('Insufficient ETX balance');
                // return back()->with('success', 'Insufficient ETX balance');
            }
            $wallet->balance -= $request->amount;
        }

        $wallet->save();

        Trade::create([
            'user_id' => auth()->id(),
            'coin_id' => $coin->id,
            'type' => $request->type,
            'leverage' => $request->leverage,
            'amount' => $request->amount,
            'price' => $coin->price
        ]);

        return back()->with('success', 'Trade successful');
    }

    // Close a trade
    public function closeTrade(Trade $trade)
    {
        // $this->authorize('update', $trade); // Ensure user owns this trade

        if($trade->status === 'closed'){
            return back()->withErrors('Trade is already closed.');
        }

        $coin = $trade->coin;
        $trade->close_price = $coin->price;

        if ($trade->type === 'buy') {
            $trade->profit_loss = bcmul($trade->amount, $trade->close_price - $trade->price, 8);
        } else {
            $trade->profit_loss = bcmul($trade->amount, $trade->price - $trade->close_price, 8);
        }

        $trade->status = 'closed';
        $trade->save();

        // Update wallet balance
        $wallet = auth()->user()->wallets()->firstOrCreate(['coin_id' => $trade->coin_id]);
        $wallet->balance += $trade->profit_loss;
        $wallet->save();

        return back()->with('success', 'Trade closed successfully.');
    }
}
