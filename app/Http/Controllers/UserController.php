<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'member') {
            return view('member.profile', [
                'title' => 'HandyHelp | Profile',
            ]);
        } elseif (Auth::user()->role == 'contractor') {
            return view('contractor.profile', [
                'title' => 'HandyHelp | Profile',
            ]);
        }
    }

    public function edit()
    {
        if (Auth::user()->role == 'member') {
            return view('member.profileedit', [
                'title' => 'HandyHelp | Edit Profile',
            ]);
        } elseif (Auth::user()->role == 'contractor') {
            return view('contractor.profileedit', [
                'title' => 'HandyHelp | Edit Profile',
            ]);
        }
    }
}
