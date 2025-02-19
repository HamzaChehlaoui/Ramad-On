<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->nullable()->constrained('posts')->onDelete('cascade');
            $table->foreignId('recipe_id')->nullable()->constrained('recipes')->onDelete('cascade');
            $table->text('content');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
