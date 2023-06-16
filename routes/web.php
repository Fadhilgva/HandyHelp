<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', function () {
    return view('guest.login', ['title' => 'HandyHelp | Log In']);
});

Route::get('/signup', function () {
    return view('guest.signup', ['title' => 'HandyHelp | Sign up']);
});

Route::get('/categories', function () {
    return view('guest.categories', ['title' => 'HandyHelp | Categories']);
});

Route::get('/about', function () {
    return view('guest.about', ['title' => 'HandyHelp | About Us']);
});

Route::get('/jobs', function () {
    return view('guest.jobs', ['title' => 'HandyHelp | Jobs']);
});

Route::get('/job-detail', function () {
    return view('guest.jobdetail', ['title' => 'HandyHelp | Job Detail']);
});

Route::get('/profile-member', function () {
    return view('member.profile', [
        'title' => 'HandyHelp | Profile',
        'user' => 'Member'
    ]);
});

Route::get('/profile-member-edit', function () {
    return view('member.profileedit', [
        'title' => 'HandyHelp | Edit Profile',
        'user' => 'Member'
    ]);
});

Route::get('/profile-contractor', function () {
    return view('contractor.profile', [
        'title' => 'HandyHelp | Profile',
        'user' => 'Contractor'
    ]);
});

Route::get('/profile-contractor-edit', function () {
    return view('contractor.profileedit', [
        'title' => 'HandyHelp | Edit Profile',
        'user' => 'Contractor'
    ]);
});

Route::get('/posting-job', function () {
    return view('member.member-posting', [
        'title' => 'HandyHelp | Posting Job',
        'user' => 'Member'
    ]);
});
