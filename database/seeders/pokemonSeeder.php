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
            [
                "name" => 'Bulbasaur',
                "description" => "There is a plant seed on its back right from the day this Pokémon is born. The seed slowly grows larger.",
                "type_id" => 2,
                "rarity" => 'normal'
            ],
            [
                "name" => 'Ivysaur',
                "description" => "When the bulb on its back grows large, it appears to lose the ability to stand on its hind legs.",
                "type_id" => 2,
                "rarity" => 'normal'
            ],
            [
                "name" => 'Venusaur',
                "description" => "Its plant blooms when it is absorbing solar energy. It stays on the move to seek sunlight.",
                "type_id" => 2,
                "rarity" => 'rare'
            ],
            [
                "name" => 'Charmander',
                "description" => "It has a preference for hot things. When it rains, steam is said to spout from the tip of its tail.",
                "type_id" => 4,
                "rarity" => 'normal'
            ],
            [
                "name" => 'Charmeleon',
                "description" => "It has a barbaric nature. In battle, it whips its fiery tail around and slashes away with sharp claws.",
                "type_id" => 4,
                "rarity" => 'normal'
            ],
            [
                "name" => 'Charizard',
                "description" => "It is said that Charizard's fire burns hotter if it has experienced harsh battles.",
                "type_id" => 4,
                "rarity" => 'rare'
                ],
            [
                "name" => 'Squirtle',
                "description" => "When it retracts its long neck into its shell, it squirts out water with vigorous force.",
                "type_id" => 3,
                "rarity" => 'normal'
            ],
            [
                "name" => 'Wartortle',
                "description" => "It is recognized as a symbol of longevity. If its shell has algae on it, that Wartortle is very old.",
                "type_id" => 3,
                "rarity" => 'normal'
            ],
            [
                "name" => 'Blastoise',
                "description" => "It is recognized as a symbol of longevity. If its shell has algae on it, that Wartortle is very old.",
                "type_id" => 3,
                "rarity" => 'rare'
            ],
            [
                "name" => 'Caterpie',
                "description" => "For protection, it releases a horrible stench from the antenna on its head to drive away enemies.",
                "type_id" => 2,
                "rarity" => 'normal'
            ],
            [
                "name" => 'Metapod',
                "description" => "It is waiting for the moment to evolve. At this stage, it can only harden, so it remains motionless to avoid attacks.",
                "type_id" => 2,
                "rarity" => 'normal'
            ],
            [
                "name" => 'Butterfree',
                "description" => "It loves the nectar of flowers and can locate flower patches that have even tiny amounts of pollen.",
                "type_id" => 2,
                "rarity" => 'normal'
            ],
            [
                "name" => 'Weedle',
                "description" => "Beware of the sharp stinger on its head. It hides in grass and bushes where it eats leaves.",
                "type_id" => 2,
                "rarity" => 'normal'
            ],
            [
                "name" => 'Kakuna',
                "description" => "Able to move only slightly. When endangered, it may stick out its stinger and poison its enemy.",
                "type_id" => 2,
                "rarity" => 'normal'
            ],
            [
                "name" => 'Beedrill',
                "description" => "It has three poisonous stingers on its forelegs and its tail. They are used to jab its enemy repeatedly.",
                "type_id" => 2,
                "rarity" => 'normal'
            ],
        ]);
    }
}
