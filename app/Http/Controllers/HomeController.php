<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('guest.home', [
            'title' => 'HandyHelp | Connecting Hands, Solving demands',
        ]);
    }

    public function categories()
    {
        return view('guest.about', [
            'title' => 'HandyHelp | About Us'
        ]);
    }
}
