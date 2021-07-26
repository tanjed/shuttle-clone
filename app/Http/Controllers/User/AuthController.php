<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('user.pages.auth.login');
    }

    public function showRegister()
    {
        return view('user.pages.auth.register');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            return redirect()->route('user.dashboard');
        }
        return back()->withErrors(['message' => 'Invalid credentials.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('show.user.login');
    }
}
