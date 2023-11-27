<?php

namespace App\Http\Controllers;

use App\Models\Matela;
use Illuminate\Http\Request;

class MatelasController extends Controller
{
    public function index()
    {
        return view("matelas/index",[
            "matelas"=> Matela::all(),
        ]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        // dd('coucou22');
    //     $request->validate([
    //     'title' => 'required|min:2',
    //     'marque' => 'required|min:2',
    //     'longueur' => 'required|integer|min:1',
    //     'image'=> 'required|url',
    // ]);
    // dd('coucou29');
    $matelas = new Matela();
    $matelas->title = $request->title;
    $matelas->marque = $request->marque;
    $matelas->longueur = $request->longueur;
    $matelas->largeur = $request->largeur;
    $matelas->cover = $request-> cover;
    $matelas->prix = $request->prix;
    $matelas->save();

    return redirect('index');
    }
    public function show($id)
    {
        $matelas = Matela ::findOrFail($id);
        return view('show',[
            'matelas'=> $matelas,
        ]);
        
    }
    public function edit()
    {
        return view('edit');
    }
    public function update(Request $request, $id)
    {
        // dd('coucou22');
    //     $request->validate([
    //     'title' => 'required|min:2',
    //     'marque' => 'required|min:2',
    //     'longueur' => 'required|integer|min:1',
    //     'image'=> 'required|url',
    // ]);
    // dd('coucou29');
    $matelas = Matela::findOrFail($id);
    $matelas->title = $request->title;
    $matelas->marque = $request->marque;
    $matelas->longueur = $request->longueur;
    $matelas->largeur = $request->largeur;
    $matelas->cover = $request-> cover;
    $matelas->prix = $request->prix;
    $matelas->save();

    return redirect('index');
    }

    public function destroy($id)
    {
        $matelas = Matela::findOrFail($id);

        Matela::destroy($id);
        
        return redirect('index');
    }
}
