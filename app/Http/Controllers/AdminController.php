<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function returnTypePage(): View
    {
        return view('admin.type');
    }

    public function returnPokemonsPage(): View
    {
        return view('admin.pokemons');
    }
}
