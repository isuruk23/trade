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

        // $front = $request->file('document_front')->store('kyc');
        // $back = $request->file('document_back')?->store('kyc');
        // $selfie = $request->file('selfie')->store('kyc');

        $path = public_path('files/kyc');

        // make sure directory exists
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }

        $front = null;
        $back = null;
        $selfie = null;

        if ($request->hasFile('document_front')) {
            $frontName = uniqid().'_'.$request->document_front->getClientOriginalName();
            $request->document_front->move($path, $frontName);
            $front = 'files/kyc/'.$frontName;
        }

        if ($request->hasFile('document_back')) {
            $backName = uniqid().'_'.$request->document_back->getClientOriginalName();
            $request->document_back->move($path, $backName);
            $back = 'files/kyc/'.$backName;
        }

        if ($request->hasFile('selfie')) {
            $selfieName = uniqid().'_'.$request->selfie->getClientOriginalName();
            $request->selfie->move($path, $selfieName);
            $selfie = 'files/kyc/'.$selfieName;
        }


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
