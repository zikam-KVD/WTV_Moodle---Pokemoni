<?php

namespace App\Http\Livewire;

use App\Models\Type;
use Livewire\Component;

class PokemonTypeDetail extends Component
{
    /** @var int $typeId */
    public $typeId;
    /** @var Type $type */
    public $type;
    /** @var string $nazev */
    public $nazev;
    /** @var string $hex_barva */
    public $hex_barva;
    /** @var string|null $message */
    public $message;
    /** @var int $status */
    public $status;

    public function mount(int $typeId)
    {
        $this->typeId = $typeId;
        $this->type = Type::find($typeId);
        $this->nazev = $this->type->nazev;
        $this->hex_barva = $this->type->hex_barva;
    }

    public function edit()
    {
        try {
            $this->type->nazev = $this->nazev;
            $this->type->hex_barva = $this->hex_barva;
            $this->type->save();

            $this->message = null;
            $this->status = 1;
        } catch (\Throwable $th) {

            $this->status = -1;
            $this->message = "Chyba při zápisu do databáze.";
        }

        //"refresh" komponenty
        $this->mount($this->typeId);
    }

    public function render()
    {
        return view('livewire.pokemon-type-detail');
    }
}
