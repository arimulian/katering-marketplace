<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $data = $request->validate([
           'name' => 'required|max:255',
            'email' => 'required|'. Rule::unique('users', 'email'),
            'password' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'role' => 'required'
        ]);
        // Register the user
        $password = Hash::make($data['password']);
        User::query()
            ->create([
                'name' => $data['name'],
                'address' => $data['address'],
                'contact' => $data['contact'],
                'email' => $data['email'],
                'password' => $password,
                'role' => $data['role'],
            ]);
        return redirect()->route('login')->with('status', 'Registration successful!🤙');
    }

}
