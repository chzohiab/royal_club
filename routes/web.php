<?php

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
});
////////////////User auth////////////////////////

Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');

////////////////Admin auth////////////////////////

Route::get('/admin/login', function () {
    return view('adminauth.login');
})->name('adminauth.login');

Route::get('/admin/dashboard', function () {
    return view('admin.pages.dashboard.dashboard');
})->name('admin.pages.dashboard.dashboard');