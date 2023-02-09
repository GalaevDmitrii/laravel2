<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Les jeux') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="">
                        <label for="new-game">Titre de nouvelle jeu:</label>
                        <input type="text" placeholder="Titre" name="new-game">
                        <label for="new-description">Votre description:</label>
                        <input type="text" placeholder="Description" name="new-description">
                        <x-secondary-button>Submit</x-secondary-button>
                    </form>

                   


                </div>
            </div>
        </div>
    </div>
</x-app-layout>