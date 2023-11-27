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

    $request->validate([
        'title' => 'required|min:2',
        'marque' => 'required|min:2',
        'longueur' => 'required|integer|min:1',
        'image'=> 'required|url',
    ]);

    $matelas = new Matela();
    $matelas->title = $request->title;
    $matelas->marque = $request->marque;
    $matelas->longueur = $request->longueur;
    $matelas->cover = $request-> cover;
    $matelas->save();

    return redirect('matelas/index');
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
    public function update(Request $request,$id)
    {
        $matelas = Matela::findOrFail($id);
    $request->validate([
        'title' => 'required|min:2',
        'marque' => 'required|min:10',
        'longueur' => 'required|integer|min:1',
        'image'=> 'required|url',
    ]);
    $matelas->title = $request->title;
    $matelas->marque = $request->marque;
    $matelas->longueur = $request->longueur;
    $matelas->cover = $request-> cover;
    $matelas->save();

    return redirect('matelas/index');
    }

    public function destroy($id)
    {
        $matelas = Matela::findOrFail($id);

        Matela::destroy($id);
        
        return redirect('matelas/index');
    }
}
