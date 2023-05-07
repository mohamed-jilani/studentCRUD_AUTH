<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\CustomAuthController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [CustomAuthController::class, 'home']);
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin');
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::resource('/student', studentController::class);
Route::get('/students/create', [studentController::class,'create']);
