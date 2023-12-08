<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemons')->insert([
            ["name" => 'Bulbasaur', "type_id" => 2, "rarity" => 'normal'],
            ["name" => 'Ivysaur', "type_id" => 2, "rarity" => 'normal'],
            ["name" => 'Venusaur', "type_id" => 2, "rarity" => 'rare'],
            ["name" => 'Charmander', "type_id" => 4, "rarity" => 'normal'],
            ["name" => 'Charmeleon', "type_id" => 4, "rarity" => 'normal'],
            ["name" => 'Charizard', "type_id" => 4, "rarity" => 'rare'],
            ["name" => 'Squirtle', "type_id" => 3, "rarity" => 'normal'],
            ["name" => 'Wartortle', "type_id" => 3, "rarity" => 'normal'],
            ["name" => 'Blastoise', "type_id" => 3, "rarity" => 'rare'],
            ["name" => 'Caterpie', "type_id" => 2, "rarity" => 'normal'],
            ["name" => 'Metapod', "type_id" => 2, "rarity" => 'normal'],
            ["name" => 'Butterfree', "type_id" => 2, "rarity" => 'normal'],
            ["name" => 'Weedle', "type_id" => 2, "rarity" => 'normal'],
            ["name" => 'Kakuna', "type_id" => 2, "rarity" => 'normal'],
            ["name" => 'Beedrill', "type_id" => 2, "rarity" => 'normal'],
        ]);
    }
}
