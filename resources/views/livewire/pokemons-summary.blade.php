<div>
    <div class="bg-white mt-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="grid grid-cols-8">
            @if(null !== $message)
            <div class="col-span-8 p-2 text-center">
                {{ $message }}
            </div>
            @endif
            <div class="col-span-8 sm:col-span-2 p-2">
                <x-jet-label for="photo" value="Obrázek" />
                <x-jet-input id="photo" type="file" class="rounded-none w-full" wire:model.defer="photo" accept=".jpg" />
            </div>

            <div class="col-span-8 sm:col-span-2 p-2">
                <x-jet-label for="new_name" value="Název pokémona" />
                <x-jet-input id="new_name" type="text" class="w-full" wire:model="name" />
            </div>

            <div class="col-span-8 sm:col-span-2 p-2">
                <x-jet-label for="type" value="Typ pokémona" />
                <select id="type" wire:model="type_id" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                    @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->nazev }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-8 sm:col-span-2 p-2">
                <x-jet-label for="rarity" value="Vzácnost" />
                <select id="rarity" wire:model="rarity" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                    @foreach($rarities as $rarity)
                        <option value="{{ $rarity }}">{{ $rarity }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-span-8 p-2">
                <x-jet-label for="description" value="Popis" />
                <textarea id="description" wire:model="description"  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full" rows="3"></textarea>
            </div>

            <div class="col-span-8 flex justify-center bg-gray-100 border-t-2 p-2 rounded rounded-t-none">
                <x-jet-button
                    title="Vložit pokémona"
                    aria-title="Vložit pokémona"
                    wire:click="add"
                >
                    <i class="fas fa-edit"></i>
                </x-jet-button>
            </div>

        </div>
    </div>

    <div class="mt-5 mb-2">
        @foreach($pokemons as $pokemon)
            @livewire(
                'pokemon-detail',
                ['pokemonId' => $pokemon->id],
                key($pokemon->id)
            )
        @endforeach
    </div>

    <div>
        {{ $pokemons->links() }}
    </div>
</div>
