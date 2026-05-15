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
            $table->string('name');
            $table->text('description');

            //creo la llave foranea para game
            $table->unsignedBigInteger('game_id')->nullable()->unique();

            $table->foreign('game_id')
                ->references('id')
                ->on('games')
                ->onDelete('set null')
                ->onUpdate('set null');

            //creo la llave foranea para player
            $table->unsignedBigInteger('player_id')->nullable()->unique();

            $table->foreign('player_id')
                ->references('id')
                ->on('players')
                ->onDelete('set null')
                ->onUpdate('set null');
            $table->timestamps();
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
