<x-guest-layout>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="max-w-6xl sm:px-6 lg:px-8">

            <div class=" relative max-w-sm bg-white border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                @php
                    $pokemonPath = "pokemons/" . strtolower($pokemon->name) . ".jpg";
                @endphp
                <div class="pokemon-image p-6">
                    <img class="rounded-t-lg" src="{{ asset($pokemonPath) }}" alt="pokemon_{{ $pokemon->id }}" />
                </div>
                <div class="p-6">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $pokemon->name }}
                    </h5>
                    <h6 class="text-gray-400">
                        <span> #{{ sprintf('%04d', $pokemon->id) }}</span>
                    </h6>
                    <div class="types">
                        <a href="{{ route('type', ['id' => $pokemon->type->id]) }}">
                            <div class="type rounded" style="background-color: {{ $pokemon->type->hex_barva }}">
                                {{ $pokemon->type->nazev }}
                            </div>
                        </a>
                    </div>
                    <div class="mt-2">
                        <p>{{ $pokemon->description }}</p>
                    </div>
                </div>
                <div class="absolute top-5 left-5">
                    <a
                        href="{{ route('index') }}"
                        title="Zpět na pokédex"
                        aria-title="Zpět na pokédex"
                    >
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>

</x-guest-layout>
