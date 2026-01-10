<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Withdrawal;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Trade;
use App\Models\Wallet;

class WithdrawalController extends Controller
{
    public function create()
    {
        $coins=Coin::where('symbol','USDT')->get();
        return view('user.withdraw', compact('coins'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'currency' => 'required',
            'wallet' => 'required',
            'amount' => 'required|numeric|min:1'
        ]);

        if(auth()->user()->balance < $request->amount){
            return back()->withErrors('Insufficient balance');
        }
        $hasOpenTrade = Trade::where('user_id', auth()->user()->id)
                        ->where('status', 'open')
                        ->exists();
        $openTrades = Trade::where('user_id', auth()->id())
                ->where('status', 'open')
                ->get();

        $totalOpenAmount = $openTrades->sum('amount');

        $wallet = Wallet::firstOrCreate(
            ['user_id' => auth()->id(), 'coin_id' => 1],
            ['balance' => 0]
        );

        $availableBalance = $wallet->balance - $totalOpenAmount;

        $pendingWithdrawal = Transaction::where('user_id', auth()->id())
                        ->where('status', 'pending')
                        ->sum('amount');

        $balance=$availableBalance-$pendingWithdrawal;      
       
        if ($request->amount > ($availableBalance-$pendingWithdrawal)) {
            return back()->withErrors('You have an open trade of amount ' . number_format($totalOpenAmount)
                . '. Please close it before withdrawing. or reduce your withdrawal amount. Your available balance for withdrawal is ' . number_format($balance).' Your pending withdrawal is ' . number_format($pendingWithdrawal));
        
        }

         
                      


        Transaction::create([
            'user_id' => auth()->id(),
            'type' => 'withdrawal',
            'currency' => $request->currency,
            'wallet_address' => $request->wallet,
            'amount' => $request->amount,
        ]);

        Withdrawal::create([
            'user_id' => auth()->id(),
            'currency' => $request->currency,
            'wallet_address' => $request->wallet,
            'amount' => $request->amount,
        ]);

        return back()->with('success','Withdrawal request sent for approval');
    }
}
