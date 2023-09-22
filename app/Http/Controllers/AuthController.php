<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticated(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }

        return back()->withErrors([
            'loginError' => 'Email / Password Tidak Sesuai'
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/admin/login');
    }
}
