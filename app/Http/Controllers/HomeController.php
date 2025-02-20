<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    
    public function index()
    {

        $featuredContent = [];
        return view('home', compact('featuredContent'));
    }
}
