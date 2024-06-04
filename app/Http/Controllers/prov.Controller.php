<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

class provController extends Controller
{
    public function f1()
    {
        return redirect()->route('web/prov');
    }
}
