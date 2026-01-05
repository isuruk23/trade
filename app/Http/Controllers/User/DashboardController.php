<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Transaction;
use App\Models\Wallet;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
 
        
        return view('user.dashboard', [
            'balance' => Wallet::where('user_id',$user->id)->pluck('balance')->first(),
            'deposits' => $user->transactions()->where('type','deposit')->count(),
            'withdrawals' => $user->transactions()->where('type','withdrawal')->count(),
            'pending' => $user->transactions()->where('status','pending')->count(),
            'transactions' => Transaction::where('user_id', $user->id)->get(),
        ]);
    }
}
