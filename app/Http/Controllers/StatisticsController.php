<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
   
    public function index()
    {

        $statistics = [];

        return view('Statistics', compact('statistics'));
    }
}
