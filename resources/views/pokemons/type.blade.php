<x-guest-layout>

    <div class="bg-gray-100 pt-5 text-center uppercase">
        <h1>
            <a href="{{ route('index') }}" title="Zpět na pokédex" aria-title="Zpět na pokédex">
                <i class="fa-solid fa-chevron-left">U</i>
            </a>
            <span class="border-b-2" style="border-color: {{ $type->hex_barva }}">
                <span class="font-bold">Typ pokémona:</span> {{ $type->nazev }}
            </span>
        </h1>
    </div>

    <div class="relative flex flex-wrap items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
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

        <div class="max-w-6xl sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-4 pt-8">

            @foreach($pokemons as $pokemon)
            <div class="pokemon max-w-sm border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                @php
                $pokemonPath = "pokemons/" . strtolower($pokemon->name) . ".jpg";
                @endphp
                <div class="pokemon-image p-6">
                    <img class="rounded-t-lg" src="{{ asset($pokemonPath) }}" alt="pokemon_{{ $pokemon->id }}" />
                </div>
                <div class="absolute top-5 right-5">
                    <a href="{{ route('detail', ['id' => $pokemon->id]) }}" class="icon" title="Zobrazení detailu" aria-title="Zobrazení detailu">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</x-guest-layout>
