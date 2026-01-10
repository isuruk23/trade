<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;

class UserVerificationController extends Controller
{
    public function verifyEmail($token)
    {
      
        $user = User::where('verification_token', $token)->first();
        
        if (!$user) {
            // return redirect('/login')->with('error', 'Invalid or expired verification link.');
            return redirect('/login')
            ->with('errors', 'Invalid or expired verification link.');
        }

        $user->verified = 1;
        $user->verification_token = null;
        $user->save();

        return redirect('/login')->with('success', 'Email verified successfully. You can now login.');
    }
}
