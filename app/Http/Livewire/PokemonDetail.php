<?php

namespace App\Http\Livewire;

use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Support\Collection;
use Livewire\Component;

class PokemonDetail extends Component
{
    /** @var int $pokemonId */
    public $pokemonId;
    /** @var string $name */
    public $name;
    /** @var int $typeId */
    public $typeId;
    /** @var string $message */
    public $message = null;
    /** @var int $status */
    public $status;
    /** @var Collection<Type> $types */
    public $types;

    public function mount(int $pokemonId)
    {
        $pokemon = Pokemon::find($pokemonId);
        $this->name = $pokemon->name;
        $this->typeId = $pokemon->type_id;

        $this->types = Type::all();
    }

    public function edit(){
        try {
            $pokemon = Pokemon::find($this->pokemonId);

            $pokemon->name = $this->name;
            $pokemon->type_id = $this->typeId;
            $pokemon->save();

            $this->message = null;
            $this->status = 1;
        } catch (\Throwable $th) {

            $this->status = -1;
            $this->message = "Chyba při zápisu do databáze.";
        }

        //"refresh" komponenty
        $this->mount($this->pokemonId);
    }

    public function render()
    {
        return view('livewire.pokemon-detail');
    }
}
