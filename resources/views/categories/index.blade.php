<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Les categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <h1>Liste de tous les categories</h1>
                    @if (count($categories) > 0)
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th>Id

                                </th>
                                <th>Title

                                </th>
                                <th>Actions</th>
                                <th><a href="{{route('categories.create')}}"><x-button-create>Create</x-button-create></a></th>

                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $categorie)
                            <tr>
                                <td>{{$categorie->id}}</td>
                                <td>{{$categorie->libelle}}</td>

                                <td><a href="{{route('categories.edit',$categorie->id)}}"><x-button-modifier>Modifier</x-button-modifier></a>
                                    <a href="{{route('categories.show',$categorie->id)}}"><x-button-view>Voir</x-button-view></a>
                                    <x-button-delete>Supprimer</x-button-delete>
                                    
                                    
                                </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>


                    @else
                    Je n'ai pas de jeux.
                    @endif


                </div>
            </div>
        </div>
    </div>
</x-app-layout>