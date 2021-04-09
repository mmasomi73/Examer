<?php

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

Route::get('/', [\App\Http\Controllers\IndexController::class, "index"])->name('index');

Route::get('/login',[\App\Http\Controllers\Auth\LoginController::class, "showLoginForm"])->name('login');
Route::get('/register',[\App\Http\Controllers\Auth\RegisterController::class, "register"])->name('register');

Route::middleware('auth:web')->group(function (){
    Route::get('/dashboard', [\App\Http\Controllers\IndexController::class, "dashboard"])->name('dashboard');
    Route::get('/profile', [\App\Http\Controllers\IndexController::class, "profile"])->name('profile');
});
