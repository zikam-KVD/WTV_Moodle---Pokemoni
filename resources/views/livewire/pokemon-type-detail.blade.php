<div>
    <div class="bg-white mt-2 p-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="grid grid-cols-4 gap-6">
            @if(null !== $this->message)
                <div class="col-span-4 text-center">
                    <span class="text-sm">{{ $message }}</span>
                </div>
            @endif
            <div class="col-span-2">
                <x-jet-input type="text" class="w-full" wire:model="nazev" />
            </div>
            <div class="col-span-1 flex items-center justify-center">
                <x-jet-input type="color" class="w-full" wire:model="hex_barva" />
            </div>
            <div class="col-span-1 flex items-center justify-end">
                <x-jet-button
                    title="Změnit"
                    aria-title="Změnit"
                    wire:click="edit"
                >
                    <i class="fas fa-edit"></i>
                </x-jet-button>
                @switch($status)
                    @case(1)
                        <i class="ml-2 fas fa-check text-green-600"></i>
                    @break
                    @case(-1)
                        <i class="ml-2 fas fa-times text-red-600"></i>
                    @break
                    @default
                    {{-- nič --}}
                @endswitch
            </div>
        </div>
    </div>
</div>
