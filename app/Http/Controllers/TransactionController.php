<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('status','pending')->get();
        return view('admin.transactions', compact('transactions'));
    }

    // Deposit details page
    public function deposits(Request $request)
    {
        $query = Transaction::where('type','deposit')->orderBy('created_at','desc');

        if($request->filled('from')) {
            $query->whereDate('created_at', '>=', $request->from);
        }
        if($request->filled('to')) {
            $query->whereDate('created_at', '<=', $request->to);
        }

        $deposits = $query->get();

        return view('admin.deposits', compact('deposits'));
    }

    // Withdrawals with optional date filter
    public function withdrawals(Request $request)
    {
        $query = Transaction::where('type','withdrawal')->orderBy('created_at','desc');

        if($request->filled('from')) {
            $query->whereDate('created_at', '>=', $request->from);
        }
        if($request->filled('to')) {
            $query->whereDate('created_at', '<=', $request->to);
        }

        $withdrawals = $query->get();

        return view('admin.withdrawals', compact('withdrawals'));
    }


    public function approve($id)
    {
        $tx = Transaction::findOrFail($id);

        if($tx->type == 'deposit'){
            $tx->user->increment('balance', $tx->amount);
        }

        if($tx->type == 'withdrawal'){
            $tx->user->decrement('balance', $tx->amount);
        }

        $tx->update(['status'=>'approved']);

        return back()->with('success','Transaction approved');
    }

    public function reject(Request $request, $id)
    {
        Transaction::where('id',$id)->update([
            'status'=>'rejected',
            'admin_note'=>$request->note
        ]);

        return back()->with('success','Transaction rejected');
    }
}
