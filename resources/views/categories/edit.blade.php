<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <h1>Modifier le categorie</h1>


                    <h2>Titre : {{$categorie->libelle}}</h2>
                    <form action="edit.blade.php" method="Post">
                        <x-text-input placeholder="Noveau titre" name="new-titre">New libelle</x-text-input>
                        <input type="submit" value="update">
                    </form>
                   


                </div>
            </div>
        </div>
    </div>
</x-app-layout>