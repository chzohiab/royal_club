<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


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
////////////////Default Open/////////////////////
Route::get('/', function () {
    return view('user.pages.home');
})->name('home');

////////////////User auth////////////////////////

// Example
Route::get('user/login', [AuthController::class, 'userlogin'])->name('auth.login');

Route::post('user/login', [AuthController::class, 'loginValidate'])->name('login.submit');



Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('signup.form');

Route::post('/register', [AuthController::class, 'register'])->name('signup.submit');



// ...

Route::get('adminauth/login', [AuthController::class, 'adminlogin'])->name('adminauth.login');
Route::post('adminauth/login', [AuthController::class, 'adminloginValidate'])->name('login.submit');
Route::get('/admin/dashboard', function () {
    return view('admin.pages.dashboard.dashboard');
})->name('admin.pages.dashboard.dashboard');
