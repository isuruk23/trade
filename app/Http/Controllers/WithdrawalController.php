<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    public function create()
    {
        return view('user.withdraw');
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
