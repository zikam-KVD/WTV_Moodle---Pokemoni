<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Type;
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

    public function showType(int $typeId): View
    {
        $type = Type::find($typeId);
        $pokemons = null;

        if(null !== $type)
        {
            $pokemons = Pokemon::where('type_id', $typeId)->get();
        }


        return View('pokemons.type', ['pokemons' => $pokemons, 'type' => $type]);
    }
}
