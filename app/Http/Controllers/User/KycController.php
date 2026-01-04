<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\KycSubmission;
use Illuminate\Http\Request;

class KycController extends Controller
{
    public function create()
    {
        $kyc = auth()->user()->kyc;
        return view('user.kyc', compact('kyc'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'document_type' => 'required',
            'document_number' => 'required',
            'document_front' => 'required|image',
            'selfie' => 'required|image',
        ]);

        $front = $request->file('document_front')->store('kyc');
        $back = $request->file('document_back')?->store('kyc');
        $selfie = $request->file('selfie')->store('kyc');

        KycSubmission::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'full_name' => $request->full_name,
                'document_type' => $request->document_type,
                'document_number' => $request->document_number,
                'document_front' => $front,
                'document_back' => $back,
                'selfie' => $selfie,
                'status' => 'pending'
            ]
        );

        return back()->with('success','KYC submitted for review');
    }
}
