<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    
    public function index()
    {
        // You can fetch data here to pass to the view
        $recipes = []; // Replace with your data fetch logic

        return view('Recipes', compact('recipes'));
    }
}
