<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->id();

            // First create!!
            $table->unsignedBigInteger('player_id');
            $table->unsignedBigInteger('match_id');


            $table->foreign('player_id')->references('id')->on('users');
            $table->foreign('match_id')->references('id')->on('games');
            $table->dateTime('time');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
