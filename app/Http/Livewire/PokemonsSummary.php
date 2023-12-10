<?php

namespace App\Http\Livewire;

use App\Models\Pokemon;
use App\Models\Type;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class PokemonsSummary extends Component
{
    use WithFileUploads;

    /** @var string $message */
    public $message = null;
    /** @var string $name */
    public $name;
    /** @var int $type_id */
    public $type_id;
    /** @var string $description */
    public $description;

    public $photo;
    /** @var Collection<Type> $types */
    public $types;
    /** @var array<string> $rarities */
    public $rarities = ["normal", "rare", "extra"];
    /** @var string $rarity */
    public $rarity;

    /** @var int $pagination */
    private $pagination = 10;

    protected $rules = [
        'photo' => 'required|image|max:1024',
        'name' => 'required|unique:pokemons,name|min:3|max:50',
        'rarity' => 'required|string|in:normal,rare,extra',
        'description' => 'required|string|min:15|max:250',
        'type_id' => 'required|exists:pokemon_types,id',
    ];

    public function mount()
    {
        $this->types = Type::all();
        $this->type_id = $this->types[0]->id;
        $this->rarity = $this->rarities[0];
    }

    public function add()
    {
        DB::beginTransaction();

        try {
            $this->validate();

            $newPokemon = new Pokemon([
                "name" => $this->name,
                "type_id" => $this->type_id,
                "rarity" => $this->rarity,
            ]);
            $newPokemon->description = $this->description;
            $newPokemon->save();

            $this->photo->storeAs('pokemons', strtolower($this->name) . ".jpg", 'pokemons_public');
            $this->message = "Pokémon " . $this->name . " byl přidán.";
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->message = "Chyba při zápisu do databáze. " . $th->getMessage();
        }
    }

    public function render()
    {
        return view(
            'livewire.pokemons-summary',
            ['pokemons' => Pokemon::paginate($this->pagination)],
        );
    }
}
