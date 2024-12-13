<?php

namespace App\Http\Controllers;

use App\Models\Heroe;
use Illuminate\Http\Request;

class HeroeController extends Controller
{
    
    public function index()
    {
        //
        $heroes = Heroe::all();

        return view('heroes.index', compact('heroes'));
    }

    
    public function create()
    {
        //
        $heroe = new Heroe();
        return view('heroes.form', compact('heroe'));
    }

    
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'apodo' => 'required',
            'rol' => 'required',
            'elemento' => 'required',
            'arma' => 'required',
            'edad' => 'required|integer',
            'especie' => 'required',
        ]);

        Heroe::create($request->all());
        return redirect()->route('heroes.index');
    }

    
    public function edit(Heroe $heroe)
    {
        //
        return view('heroes.edit', compact('heroe'));
    }

    
    public function update(Request $request, Heroe $heroe)
    {
        //
        $validated = $request->validate([
        'nombre' => 'required',
        'apodo' => 'required',
        'rol' => 'required',
        'elemento' => 'required',
        'arma' => 'required',
        'edad' => 'required|integer',
        'especie' => 'required',
        ]);

        $heroe->update($request->all());

        return redirect()->route('heroes.index');
    }

    
    public function destroy(Heroe $heroe)
    {
        $heroe->delete();
        return redirect()->route('heroes.index');
    }
}
