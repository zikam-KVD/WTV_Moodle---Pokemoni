<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function showAllPokemons(): View
    {
        $pokemons = Pokemon::all();

        return view('pokemons/summary', ['pokemons' => $pokemons]);
    }

    public function showDetail(int $pokemonId): View
    {
        $pokemon = Pokemon::find($pokemonId);

        if (null == $pokemon) {
            abort(404);
        }

        return view('pokemons.detail', ['pokemon' => $pokemon]);
    }
}
