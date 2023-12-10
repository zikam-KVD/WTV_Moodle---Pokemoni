<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PokemonController::class, 'showAllPokemons'])->name('index');
Route::get('/detail/{id}', [PokemonController::class, 'showDetail'])->name('detail');
Route::get('/type/{id}', [PokemonController::class, 'showType'])->name('type');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    //moznost upravy pokemona

    //moznost upravy typu
    Route::get('/admin/type', [AdminController::class, 'returnTypePage']);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
