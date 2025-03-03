<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['post_id', 'recipe_id', 'content', 'name'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
