<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobsController;

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

        Route::get('/posting-job', [JobsController::class, 'index'])->middleware('accessUsers:member');

        Route::get('/posting-job/checkSlug', [JobsController::class, 'checkSlug'])->middleware('accessUsers:member');

        Route::post('/posting-job', [JobsController::class, 'store'])->middleware('accessUsers:member');

        Route::get('/jobs', [JobsController::class, 'jobs']);

        Route::get('/jobs/{job:slug}', [JobsController::class, 'show']);

        Route::get('/categories', [CategoryController::class, 'index']);

        Route::get('/categories/{category:slug}', [CategoryController::class, 'category']);

        Route::get('/job-detail', function () {
            return view('guest.jobdetail', ['title' => 'HandyHelp | Job Detail']);
        });

        Route::get('/logout', [RegisterController::class, 'destroy']);
    }
);
