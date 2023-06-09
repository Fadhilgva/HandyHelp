<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Jobs;
use App\Models\User;
use App\Models\Skill;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'member') {

            $jobs = Jobs::join('users', 'jobs.user_id', '=', 'users.id')
                ->where('jobs.user_id', '=', Auth::user()->id)->latest('jobs.created_at')
                ->select('jobs.*')->get();
            // dd($jobs);
            return view('member.profile', [
                'title' => 'HandyHelp | Profile',
                'jobs' => $jobs
            ]);
        } elseif (Auth::user()->role == 'contractor') {
            return view('contractor.profile', [
                'title' => 'HandyHelp | Profile',
            ]);
        }
    }

    public function edit()
    {
        $skills = Skill::all();
        $cities = City::all();
        $countries = Country::all();

        if (Auth::user()->role == 'member') {
            return view('member.profileedit', [
                'title' => 'HandyHelp | Edit Profile',
                'cities' => $cities,
                'countries' => $countries
            ]);
        } elseif (Auth::user()->role == 'contractor') {
            return view('contractor.profileedit', [
                'title' => 'HandyHelp | Edit Profile',
                'skills' => $skills,
                'cities' => $cities,
                'countries' => $countries
            ]);
        }
    }

    public function store(Request $request)
    {
        if (Auth::user()->role == 'member') {
            $user = User::find(Auth::user()->id);

            $user = User::find(Auth::user()->id);

            if ($request->email != $user->email) {
                $request->validate([
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
                ]);
            } else {
                $request->validate([
                    'email' => ['required', 'string', 'email', 'max:255']
                ]);
            }

            if ($request->phone != $user->phone) {
                $request->validate([
                    'phone' => ['required', 'numeric', 'min_digits:8', 'max_digits:15', 'unique:users']
                ]);
            } else {
                $request->validate([
                    'phone' => ['required', 'numeric', 'min_digits:8', 'max_digits:15']
                ]);
            }

            $request->validate([
                'name' => ['required', 'string', 'min:5', 'max:255'],
                'desc' => ['max:500'],
            ]);

            if ($user) {
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->phone = $request->input('phone');
                $user->desc = $request->input('desc');
                $user->city = $request->input('city');
                $user->country = $request->input('country');
                $user->update();

                return redirect('/profile')->with('updateprofile', 'Your Profile has been successfully updated!');
            } else {
                return redirect()->back();
            }
        } elseif (Auth::user()->role == 'contractor') {
            $user = User::find(Auth::user()->id);

            if ($request->email != $user->email) {
                $request->validate([
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
                ]);
            } else {
                $request->validate([
                    'email' => ['required', 'string', 'email', 'max:255']
                ]);
            }

            if ($request->phone != $user->phone) {
                $request->validate([
                    'phone' => ['required', 'numeric', 'min_digits:8', 'max_digits:15', 'unique:users']
                ]);
            } else {
                $request->validate([
                    'phone' => ['required', 'numeric', 'min_digits:8', 'max_digits:15']
                ]);
            }

            $request->validate([
                'name' => ['required', 'string', 'min:5', 'max:255'],
                'desc' => ['min:20', 'max:500'],
            ]);

            if ($user) {
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->phone = $request->input('phone');
                $user->desc = $request->input('desc');
                $user->skill = $request->input('skill');
                $user->city = $request->input('city');
                $user->country = $request->input('country');
                $user->update();

                return redirect('/profile')->with('updateprofile', 'Your Profile has been successfully updated!');
            } else {
                return redirect()->back();
            }
        }
    }
}
