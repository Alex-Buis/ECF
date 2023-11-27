@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <h1 class="text-xl font-bold text-yellow-500">Changer la nature du produit</h1>
</div>

    <div class="text-center bg-blue-800 text-yellow-500 font-bold">
        <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="block">Titre</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="rounded shadow border-gray-300 w-full">
            @error('title')
                <div class="text-red-500">Error</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="Marque" class="block">Marque</label>
            <textarea name="Marque" id="Marque" class="rounded shadow border-gray-300 w-full">{{ old('Marque') }}</textarea>
            @error('Marque')
                <div class="text-red-500">Error</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="Longueur" class="block">Longueur</label>
            <input type="text" name="Longueur" id="Longueur" value="{{ old('Longueur') }}" class="rounded shadow border-gray-300 w-full">
            @error('Longueur')
                <div class="text-red-500">Error</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cover" class="block">URL de l'image</label>
            <input type="text" name="cover" id="cover" value="{{ old('cover') }}" class="rounded shadow border-gray-300 w-full">
            @error('cover')
            <div class="text-red-500">Error</div>
            @enderror
        </div>

        <button class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Ajouter</button>
    </form>
    </div>
        
        
@endsection