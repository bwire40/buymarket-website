<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // welcome page
    public function index()
    {
        return view('welcome');
    }
}
