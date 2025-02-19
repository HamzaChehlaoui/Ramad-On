<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // You can fetch data here to pass to the view
        $featuredContent = []; // Replace with your data fetch logic

        return view('home', compact('featuredContent'));
    }
}
