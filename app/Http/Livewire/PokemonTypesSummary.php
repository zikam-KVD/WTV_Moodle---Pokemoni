<?php

namespace App\Http\Livewire;

use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class PokemonTypesSummary extends Component
{
    use WithPagination;

    /** @var string $nazev */
    public $nazev = null;
    /** @var string $hex_barva */
    public $hex_barva = null;
    /** @var string|null $message */
    public $message = null;
    /** @var int $pagination */
    private $pagination = 10;

    protected $rules = [
        'nazev' => 'required|unique:pokemon_types,nazev|min:3|max:50',
        'hex_barva' => ['required',
                        'unique:pokemon_types,hex_barva',
                        'regex:/^#([a-f0-9]{6}|[a-f0-9]{3})$/i',
                        ],
    ];

    public function add()
    {
        try {
            $this->validate();

            $newType = new Type();
            $newType->nazev = $this->nazev;
            $newType->hex_barva = $this->hex_barva;
            $newType->save();

            $this->message = "Typ " . $this->nazev . " byl přidán.";
        } catch (\Throwable $th) {
            $this->message = "Chyba při zápisu do databáze. " . $th->getMessage();
        }



    }

    public function render()
    {
        return view(
            'livewire.pokemon-types-summary',
            ['types' => Type::paginate($this->pagination)
        ]);
    }
}
