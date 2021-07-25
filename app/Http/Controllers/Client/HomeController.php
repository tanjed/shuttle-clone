<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        return view('client.pages.home');
    }

    public function showBusiness()
    {
        return view('client.pages.business');
    }

    public function showRent()
    {
        return view('client.pages.rental');
    }
    public function showWomen()
    {
        return view('client.pages.women');
    }
}
