<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ExperienceController extends Controller
{

    public function index()
    {

        $posts = Post::all();
        return view('Experiences', compact('posts'));
    }
}
