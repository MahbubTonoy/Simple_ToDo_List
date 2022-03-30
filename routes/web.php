<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Authentication;
// use App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\AuthCheck;
use App\Http\Controllers\User\RouteController;
// use App\Http\Middleware\User\AuthCheckMiddleware;

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

Route::group([
    'middleware'=>'AuthCheckMiddleware'
], function() {
    Route::get('/login', [Authentication::class, "login"])->name('login');
    Route::get('/register', [Authentication::class, "register"])->name('register');
});
Route::get('/forgetPassword', [Authentication::class, "forgetPwd"])->name('forgetPwd');
Route::get('/verify', [Authentication::class, "verifyEmail"])->name('verifyEmail');

Route::post('/save', [AuthCheck::class, "saveUser"])->name('saveUser');
Route::post('/access', [AuthCheck::class, "loginUser"])->name('loginUser');


Route::group(['prefix'=>'/user', 'middleware'=>'AuthCheckMiddleware'], function(){
    Route::get('/dashboard', [RouteController::class, 'index'])->name('dashboard');
    Route::get('/logout', [RouteController::class, 'logout'])->name('logout');
    Route::get('/changePassword', [Authentication::class, "changePwd"])->name('changePwd');
});