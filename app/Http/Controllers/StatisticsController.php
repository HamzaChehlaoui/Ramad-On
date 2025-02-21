<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Recipe;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        $totalComments = Comment::count();
        $totalPosts = Post::count();
        $totalRecipes = Recipe::count();

        return view('Statistics', compact('totalComments', 'totalPosts', 'totalRecipes'));
    }
}
