<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Authentication;

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
    return view('welcome');
});

Route::group(["prefix"=>"admin"], function(){
});
Route::get('/login', [Authentication::class, "login"])->name('login');
Route::get('/register', [Authentication::class, "register"])->name('register');
Route::get('/forgetPassword', [Authentication::class, "forgetPwd"])->name('forgetPwd');
Route::get('/changePassword', [Authentication::class, "changePwd"])->name('changePwd');
Route::get('/verify', [Authentication::class, "verifyEmail"])->name('verifyEmail');