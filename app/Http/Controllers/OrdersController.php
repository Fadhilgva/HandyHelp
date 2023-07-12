<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        return view('member.status', [
            'title' => 'HandyHelp | My Submission'
        ]);
    }
}