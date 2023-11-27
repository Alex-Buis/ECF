@extends('layouts.app')

@section('content')

<div class="flex items-center gap-10 mb-6 flex justify-center">
    <h1 class="text-3xl font-bold">Catalogue</h1>
    <a href="/create" class="px-4 py-2 text-sm bg-blue-800 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm text-l font-bold text-yellow-500">Créer un nouveau matelas</a>
</div>

    <div class="flex flex-wrap mx-3 justify-center">
    @foreach ($matelas as $matela)
    <div class="w-1/2 md:w-1/3 lg:w-1/5 mb-3">
        <div class="flex flex-col justify-between h-full">
            <a href="/index/{{$matela->id}}" class="mx-3 block group">
            <img class="w-full h-[300px] mb-3" src="{{$matela->cover}}" alt="">

                <div class="flex justify-center">
                    <h3 class="text-sm font-bold">{{ $matela->title }}</h3>
                    <h3 class="mx-2">{{ $matela->longueur }} x {{ $matela->largeur }}</h3>
                    <h3 class="text-sm font-bold">{{ $matela->prix }} €</h3>
                </div>
                    </a>
            
            <div class="mx-3 mb-3 flex justify-around">
                <a class="text-sm bg-blue-800 px-2 py-1 text-yellow-500 rounded-full" href="/matelas/{{ $matela->id}}/modifier ">Modifier</a>
                <a class="text-sm bg-yellow-500 px-2 py-1 text-blue-800 rounded-full" href="/matelas/{{ $matela->id }}/supprimer" onclick="return confirm('Etes-vous sûr de vouloir supprimer le film {{$matela->title}} ? ')" >Supprimer</a>
            </div>
            
        </div>
    </div>
    @endforeach
</div>
@endsection