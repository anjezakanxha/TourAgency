<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToursController extends Controller
{
    public function tour()
    {
        return view('web\tours');
    }
}
