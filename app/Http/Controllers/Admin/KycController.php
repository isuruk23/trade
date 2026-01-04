<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KycSubmission;

class KycController extends Controller
{
    public function index()
    {
        $kycs = KycSubmission::orderBy('created_at','desc')->get();
        return view('admin.kyc', compact('kycs'));
    }

    public function approve($id)
    {
        KycSubmission::where('id',$id)->update(['status'=>'approved']);
        return back()->with('success','KYC Approved');
    }

    public function reject(Request $request, $id)
    {
        KycSubmission::where('id',$id)->update([
            'status'=>'rejected',
            'admin_note'=>$request->note
        ]);

        return back()->with('success','KYC Rejected');
    }
}
