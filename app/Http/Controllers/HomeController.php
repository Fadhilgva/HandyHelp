<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = Jobs::orderBy('created_at', 'desc')->get();
        return view('guest.home', [
            'title' => 'HandyHelp | Connecting Hands, Solving demands',
            'jobs' => $jobs
        ]);
    }

    public function categories()
    {
        return view('guest.about', [
            'title' => 'HandyHelp | About Us'
        ]);
    }
}
