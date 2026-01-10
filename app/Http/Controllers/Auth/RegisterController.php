<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   
    // protected $redirectTo = '/login';
    // protected function authenticated($request, $user)
    // {
    //     if ($user->role === 'admin') {
    //         return redirect('/admin/dashboard');
    //     }
    //     else{
    //         if(!auth()->user()->kyc || auth()->user()->kyc->status !== 'approved'){
    //             return redirect('/kyc')->withErrors('Complete KYC first');
    //         }
    //         else{
    //             return redirect('/user/dashboard');

    //         }
    //     }
        

        
    // }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $token = Str::random(64);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'country' => $data['country'],
            'password' => Hash::make($data['password']),
            'verification_token' => $token,
        ]);

        $verifyUrl = route('email.verify.custom', $token);

        Mail::send('emails.verify', ['url' => $verifyUrl, 'user' => $user], function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Verify Your Email Address');
        });

        return redirect('/login')->with('error', 'Verification link Send to Your Email Address.');
    }
}
