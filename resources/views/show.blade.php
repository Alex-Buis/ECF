@extends('layouts.app')

@section ('content')
<a href="/index" class="text-gray-500">Retour a la page des Matelas</a>
    <div class=" ">
        <div class="w-1/2 ">
            <img class="w-full" src="{{ $matelas->cover }}" alt="{{ $matelas->title }}">
        </div>
        <div class="<-1/2">
            <div class="border p-4 shadow-lg">
                <h1 class="text-4xl">{{ $matelas->title }}</h1>
                <p class="my-3">{{ $matelas->marque }}</p>
                <p class="text-sm">Longueur : {{ $matelas->longueur }} x {{ $matelas->largeur }} </p>
                <p> Prix : {{ $matelas->prix }} €</p>
            {{-- <p>Sortie: {{ $list->released_at }}</p>
            @endif
            @if ($list->category_id)
            <p>Catégorie: {{ $list->category_id }}</p>
            @endif
            </div> --}}
        </div>
    </div>
@endsection