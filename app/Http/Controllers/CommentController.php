<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Recipe;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        $post = Post::findOrFail($postId);

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->content = $request->comment;
        $comment->post_id = $post->id;



        $comment->save();

        return redirect('Experiences');
    }

}
