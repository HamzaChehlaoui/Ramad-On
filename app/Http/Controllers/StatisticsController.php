<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    /**
     * Display the statistics page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        
        $statistics = []; // Replace with your data fetch logic

        return view('statistics', compact('statistics'));
    }
}
