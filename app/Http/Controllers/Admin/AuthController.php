<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.pages.auth.login');
    }

    public function postLogin(Request $request)
    {
        dd($request->all());
    }
}
