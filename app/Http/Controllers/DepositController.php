<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function create()
    {
        return view('user.deposit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'currency' => 'required',
            'amount' => 'required|numeric|min:1',
            'tx_reference' => 'required'
        ]);

        Transaction::create([
            'user_id' => auth()->id(),
            'type' => 'deposit',
            'currency' => $request->currency,
            'amount' => $request->amount,
            'tx_reference' => $request->tx_reference,
        ]);

        return back()->with('success','Deposit submitted for admin approval');
    }
}
