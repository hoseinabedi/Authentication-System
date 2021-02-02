<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::name('auth.')->group(function (){
    Route::get('/login',[LoginController::class,'index'])->name('login.form');
    Route::post('/login',[LoginController::class,'login'])->name('login');
    // Route::post('/login',['before' => 'throttle:2,60', 'uses' => 'LoginController@login'])->name('login');
    Route::get('/register',[RegisterController::class,'index'])->name('register.form');
    Route::post('/register',[RegisterController::class,'register'])->name('register');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/profile',[LoginController::class,'profile'])->name('profile')->middleware('logincheck');
});


