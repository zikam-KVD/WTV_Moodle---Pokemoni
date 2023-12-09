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
}
