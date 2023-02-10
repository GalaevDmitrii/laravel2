@section('titre', 'Un seul categorie')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Une categorie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Détails d'un categorie</h1>
                    <h2>Titre : {{$categorie->libelle}}</h2>
                    <div>
                        <p>
                            {{$categorie->description}}
                        </p>
                        <a href="{{route('categories.edit',$categorie->id)}}"><x-button-modifier>Modifier</x-button-modifier></a> <x-button-delete>Supprimer</x-button-delete></td>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>