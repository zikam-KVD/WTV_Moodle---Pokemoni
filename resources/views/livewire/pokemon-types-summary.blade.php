<div>
    <div class="bg-white mt-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="grid grid-cols-4">
            @if(null !== $message)
            <div class="col-span-4 p-2 text-center">
                {{ $message }}
            </div>
            @endif
            <div class="col-span-4 sm:col-span-2 p-2">
                <x-jet-label for="new_name" value="Název typu" />
                <x-jet-input id="new_name" type="text" class="mt-1 block w-full" wire:model="nazev" />
            </div>

            <div class="col-span-4 sm:col-span-2 p-2">
                <x-jet-label for="new_color" value="Barva typu" />
                <div class="flex justify-center items-center">
                    <x-jet-input id="new_color" type="color" class="mt-1 block w-full" wire:model="hex_barva" />
                </div>
            </div>

            <div class="col-span-4 flex justify-center bg-gray-100 border-t-2 p-2 rounded rounded-t-none">
                <x-jet-button
                    title="Vložit typ"
                    aria-title="Vložit typ"
                    wire:click="add"
                >
                    <i class="fas fa-edit"></i>
                </x-jet-button>
            </div>

        </div>
    </div>

    <div class="mt-5 mb-2">
        @foreach($types as $type)
        @livewire('pokemon-type-detail', ['typeId' => $type->id], key($type->id))
        @endforeach
    </div>

    <div>
        {{ $types->links() }}
    </div>
</div>
