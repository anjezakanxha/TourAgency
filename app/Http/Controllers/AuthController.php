<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('web/login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Perform authentication (you can implement your own logic here)
        if ($username === 'user' && $password === 'password') {
            Session::put('authenticated', true);
            Cookie::queue('username', $username, 1440); // Store username in a cookie for 1 day
            return redirect()->route('web/dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }

    public function logout()
    {
        Session::forget('authenticated');
        Cookie::queue(Cookie::forget('username'));
        return redirect()->route('login');
    }
}
