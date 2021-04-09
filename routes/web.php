<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\User;
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

//Route::get('/', [\App\Http\Controllers\IndexController::class, "index"])->name('index');

Route::view('/','welcome')->name('home');


Route::name('auth.')->group(function (){
    Route::view('/login','auth.login')->name('login');
    Route::view('/register','auth.register')->name('register');
});


Route::middleware('auth:web')->group(function (){

    //Route::get('/dashboard', [\App\Http\Controllers\IndexController::class, "dashboard"])->name('dashboard');
    //Route::get('/profile', [\App\Http\Controllers\IndexController::class, "profile"])->name('profile');

    Route::view('/dashboard','user.dashboard')->name('dashboard');
    Route::view('/profile','user.profile')->name('profile');
});
