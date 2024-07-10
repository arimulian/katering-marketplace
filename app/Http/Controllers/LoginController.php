<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            if (auth()->user()->role == 'customer'){
                return redirect()->route('customer.dashboard');
            }
            return redirect()->route('merchant.dashboard');
        }
        return redirect()->back()->with('status', 'email & password is wrong');
    }

    public function logout()
        {
            auth()->logout();
            return redirect()->route('login');
        }
}
