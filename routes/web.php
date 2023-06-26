<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

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

Route::get('/about', [HomeController::class, 'categories']);

Route::group(
    ['middleware' => ['guest']],
    function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login');

        Route::post('/login', [LoginController::class, 'authenticate']);

        Route::get('/signup_member', [RegisterController::class, 'signup_member']);

        Route::post('/signup_member', [RegisterController::class, 'store_member']);

        Route::get('/signup_contractor', [RegisterController::class, 'signup_contractor']);

        Route::post('/signup_contractor', [RegisterController::class, 'store_contractor']);
    }
);

Route::group(
    ['middleware' => ['auth']],
    function () {

        Route::get('/profile', [UserController::class, 'index']);

        Route::get('/profile-edit', [UserController::class, 'edit']);

        Route::post('/profile-edit', [UserController::class, 'store']);

        Route::get('/posting-job', function () {
            return view('member.member-posting', [
                'title' => 'HandyHelp | Posting Job',
                'user' => 'Member'
            ]);
        })->middleware('accessUsers:member');

        Route::get('/categories', function () {
            return view('guest.categories', ['title' => 'HandyHelp | Categories']);
        });

        Route::get('/jobs', function () {
            return view('guest.jobs', ['title' => 'HandyHelp | Jobs']);
        });

        Route::get('/job-detail', function () {
            return view('guest.jobdetail', ['title' => 'HandyHelp | Job Detail']);
        });

        Route::get('/logout', [RegisterController::class, 'destroy']);
    }
);
