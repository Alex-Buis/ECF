@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <h1 class="text-xl font-bold text-yellow-500">Ajouter le produit</h1>
</div>


    <div class="text-center bg-blue-800 text-yellow-500 font-bold">
        <form action="" method="post">
            @csrf
        <div class="mb-3">
            <label for="title" class="block">Nom du matelas</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="rounded shadow border-gray-300 w-full">
            @error('title')
            <div class="text-red-500">Error</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="marque" class="block">Marque</label>
            <textarea name="marque" id="marque" class="rounded shadow border-gray-300 w-full">{{ old('marque') }}</textarea>
            @error('marque')
            <div class="text-red-500">Error</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="longueur" class="block">Longueur</label>
            <input type="text" name="longueur" id="longueur" value="{{ old('longueur') }}" class="rounded shadow border-gray-300 w-full">
            @error('longueur')
            <div class="text-red-500">Error</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="largeur" class="block">largeur</label>
            <input type="text" name="largeur" id="largeur" value="{{ old('largeur') }}" class="rounded shadow border-gray-300 w-full">
            @error('largeur')
            <div class="text-red-500">Error</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="prix" class="block">prix</label>
            <input type="text" name="prix" id="prix" value="{{ old('prix') }}" class="rounded shadow border-gray-300 w-full">
            @error('prix')
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