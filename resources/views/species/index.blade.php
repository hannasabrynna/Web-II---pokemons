<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pokemon Species') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                   <h1 class= "text-lg mt-4"> Lista de especies </h1>

                   @foreach (App\Models\PokemonSpecies::all() as $species)
                    <div class="border p-2 my-1 text-sm">
                        {{ $species-> name }} {{ $species-> number }}

                        <!-- <form action="{{ route('pokemon-sp.destroy', $species )}}" method="POST">
                            @csrf
                            @method('delete')
                            <x-danger-button class="bg-red-300 hover:bg-red-500">Remover</x-danger-button>
                        </form>    -->
                
                    @endforeach

            <form action="{{ route('pokemon-sp.store') }}" method="POST">

                @csrf
              

                    <div class="grid gap-2 grid-cols-2 mb-2">
                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="type" :value="__('Number')" />
                        <x-text-input id="number" class="block mt-1 w-full" type="text" name="number" required />
                    </div>

                    </div>

                    <x-primary-button>Salvar</x-primary-button>

            </form> 

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
