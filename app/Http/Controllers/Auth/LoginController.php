<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    protected function authenticated($request, $user)
        {
            // 1️⃣ Block unverified users
            if ($user->verified==0) {
                auth()->logout(); // log them out
              
                return redirect('/login')
                ->with('success', 'Please verify your email before login.');
            }

            // 2️⃣ Admin redirect
            if ($user->role === 'admin') {
                return redirect('/admin/dashboard');
            }

            // 3️⃣ Regular user redirect
            return redirect('/dashboard');
        }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/dashboard';

    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
