<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        foreach (['posts', 'recipes', 'categories', 'comments'] as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        foreach (['posts', 'recipes', 'categories', 'comments'] as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->dropTimestamps();
            });
        }
    }
};
