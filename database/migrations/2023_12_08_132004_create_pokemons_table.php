<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('name', 35)->unique();
            $table->unsignedBigInteger('previous_level_id');
            $table->unsignedBigInteger('next_level_id');
            $table->unsignedBigInteger('type_id');
            $table->enum('rarity', ['normal', 'rare', 'extra']);
            $table->timestamps();

            $table->foreign('previous_level_id')->on('pokemons')->references('id');
            $table->foreign('next_level_id')->on('pokemons')->references('id');
            $table->foreign('type_id')->on('pokemon_types')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemons');
    }
}
