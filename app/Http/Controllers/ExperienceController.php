<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display the experiences page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // You can fetch data here to pass to the view
        $experiences = []; // Replace with your data fetch logic

        return view('experiences', compact('experiences'));
    }
}
