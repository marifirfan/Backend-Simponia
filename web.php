<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CobaDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/landingpage', [LandingPageController:: class, 'showLandingPage']);

Route::get('/login', [LoginController:: class, 'showLogin']);

Route::get('/dashboard', [DashboardController:: class, 'showDashboard']);

Route::get('/cobadashboard', [CobaDashboardController:: class, 'showDashboard']);

Route::get('/register', [RegisterController:: class, 'showRegistration']);
//Route::post('/register', [Register:: 'store']);