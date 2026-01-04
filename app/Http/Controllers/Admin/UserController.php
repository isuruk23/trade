<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.users', compact('users'));
    }

    // Active users
    public function active()
    {
        $activeUsers = User::where('status', 1)->orderBy('created_at','desc')->get();
        return view('admin.activeusers', compact('activeUsers'));
    }
    // suspended users
    public function suspended()
    {
        $suspendedUsers = User::where('status', 3)->orderBy('created_at','desc')->get();
        return view('admin.suspendedusers', compact('suspendedUsers'));
    }
}
