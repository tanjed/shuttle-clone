<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.pages.auth.login');
    }

    public function postLogin(Request $request)
    {
       if (Auth::guard('admin')->attempt([
           'email' => $request->email,
           'password' => $request->password
       ])){
          return redirect()->route('admin.dashboard');
       }
       return back()->withErrors(['message' => 'Invalid credentials.']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('show.admin.login');
    }
}
