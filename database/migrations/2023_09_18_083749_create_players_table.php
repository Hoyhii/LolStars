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
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string("team")->nullable();
            $table->string("youtube")->nullable();
            $table->string("twitch")->nullable();
            $table->string("discord")->nullable();
            $table->string("twitter")->nullable();
            $table->string("leaguepedia")->nullable();
            $table->string("rank")->nullable();
            $table->double("winrate")->nullable();
            $table->integer("games")->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
