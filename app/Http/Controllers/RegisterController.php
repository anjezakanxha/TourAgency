<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('web/register');
    }

    public function register(Request $request)
    {
        
       
        Session::put('authenticated', true);
          

        return redirect()->route('web/dashboard');
    }
}

