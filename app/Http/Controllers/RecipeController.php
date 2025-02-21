<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Support\Facades\Redis;

class RecipeController extends Controller
{

    public function index()
    {

        $recipes = Recipe::with('category')->get();
        $category = Category::all();
        return view('Recipes', compact('recipes','category'));
    }

    public function store(Request $request)
{


    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,AVIF|max:2048',
        'category_id' => 'required|exists:categories,id',

    ]);



    $recipes = new Recipe();
    $recipes->title = $validatedData['title'];
    $recipes->content = $validatedData['content'];
    $recipes->category_id = $validatedData['category_id'];


    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('recipes', 'public');
        $recipes->image = $imagePath;
    }

    $recipes->save();
    return redirect('Recipes');
}

public function filter($categoryId)
{
    $recipes = Recipe::where('category_id', $categoryId)->with('category')->get();
    return response()->json($recipes);
}
public function show($id)
{
    $recipe = Recipe::findOrFail($id);
    return view('show', compact('recipe'));
}


}

