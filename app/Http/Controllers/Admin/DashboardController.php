<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Transaction;


class DashboardController extends Controller
{
    public function index()
    {
         return view('admin.dashboard', [
            'users' => User::where('role', 'user')->count(),

            // counts
            'pending' => Transaction::where('status','pending')->count(),
            'approved' => Transaction::where('status','approved')->count(),

            // 🔥 TOTAL AMOUNTS (APPROVED ONLY)
            'totalDeposits' => Transaction::where('type','deposit')
                ->where('status','approved')
                ->sum('amount'),

            'totalWithdrawals' => Transaction::where('type','withdrawal')
                ->where('status','approved')
                ->sum('amount'),

            'totalBalance' => User::sum('balance'),
        ]);
    }
}
