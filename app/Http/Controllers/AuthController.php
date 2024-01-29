<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AdminAuthenticate;
use App\Models\AdminUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(AdminAuthenticate::class)->only(['adminlogin', 'adminloginValidate']);

    // }

        // app/Http/Controllers/AuthController.php
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $user = DB::table('admin-user')
            ->where('is_admin', 0)
            ->where('is_user', 2)
            ->where('id', 2)
            ->first();

        // Create a regular user
        $userCreate = new User();
        $userCreate->email = $request->input('email');
        $userCreate->password = bcrypt($request->input('password'));

        if ($user && $user->is_admin != 1) {
            // If not an admin, set the name
            $userCreate->name = $request->input('name');
        }

        // Set admin_user_id only if $user is not null
        $userCreate->admin_user_id = $user ? $user->id : null;

        // Make the name, email, and password fields nullable if is_admin is 1
        if ($user && $user->is_admin == 1) {
            $userCreate->name = null;
            $userCreate->email = null;
            $userCreate->password = null;
        }

        $userCreate->save();

        return redirect()->route('home');
    }


    public function userlogin()
    {
        return view('auth.login');
    }

    public function loginValidate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if (Auth::attempt($credentials)) {
            // Logic for regular user login validation
            return view('user.pages.home');
        }

        // Handle authentication failure here

        return redirect()->route('auth.login')->with('error', 'Invalid credentials.');
    }

    public function adminlogin()
    {
        return view('adminauth.login');
    }

    public function adminloginValidate(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'string'],
    ]);

    if (Auth::attempt($credentials)) {
        // Check if the user is an admin (assuming is_admin is a field in your users table)
        if (Auth::user()->admin_user_id == 1) {
            // Redirect to the admin dashboard
            return redirect()->route('admin.pages.dashboard.dashboard');
        } else {
            // Logout the user if they don't have admin permissions
            Auth::logout();
        }
    }

    // Authentication failed or user is not an admin, redirect to regular login
    return redirect()->route('adminauth.login')->with('error', 'Invalid email or password.');
}




}
