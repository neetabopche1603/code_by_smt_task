<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

// AUTH CONTROLLER ROUTES
Route::controller(AuthController::class)->group(function(){
    Route::get('register','userRegister')->name('register');
    Route::post('register-post','registerPost')->name('registerPost');

    Route::get('login','userLogin')->name('login');
    Route::post('login-post','loginPost')->name('loginPost');

    // LOGOUT ROUTE
    Route::get('logout','userLogout')->name('logout');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('dashboard','dashboard')->name('dashboard')->middleware('auth');
    Route::get('user-delete/{id}','userDelete')->name('userDelete')->middleware('auth');
});