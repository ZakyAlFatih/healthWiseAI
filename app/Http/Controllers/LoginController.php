<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('Login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            // Login berhasil
            return redirect()->route('FeaturePage') // Ganti 'dashboard' dengan rute tujuan setelah login
                ->with('success', 'Login berhasil! Selamat datang di HealthWiseAI.');
        }

        // Login gagal
        return redirect()->route('Login')
            ->with('error', 'Login gagal! Email atau password salah.');
    }
}
