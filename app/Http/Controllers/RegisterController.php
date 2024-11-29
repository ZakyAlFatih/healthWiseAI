<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('Register');
    }

    public function register(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'email' => 'required|email|unique:user,email',
            'phone' => 'required|string|max:15|min:10',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            return redirect()->route('register')->with('error', 'Email already exists!');
        }

        $user = User::create([
            'userID' => uniqid(), 
            'password' => bcrypt($request->password),
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('Login')->with('success', 'Registration successful! Silahkan Login');
    }
    public function showLogin()
    {
        return view('Login');
    }
}