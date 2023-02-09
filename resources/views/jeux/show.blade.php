@section('titre', 'Un seul jeu')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Une jeux') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Détails d'un jeu</h1>
                    <h2>Titre : {{$jeu->titre}}</h2>
                    <div>
                        <p>
                            {{$jeu->description}}
                        </p>
                        <a href="{{route('jeux.edit',$jeu->id)}}"><x-button-modifier>Modifier</x-button-modifier></a> <x-button-delete>Supprimer</x-button-delete></td>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>