<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function index()
    {
        $avatares = Avatar::all();
        return view('avatares.index', compact('avatares'));    }

    public function create()
    {
        return view('avatares.form', ['avatar' => new Avatar()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apodo' => 'required',
            'rol' => 'required',
            'elemento' => 'required',
            'arma' => 'required',
            'edad' => 'required|integer',
            'especie' => 'required',
        ]);

        Avatar::create($request->all());
        return redirect()->route('avatares.index');
    }

    public function edit(Avatar $avatar)
{
    return view('avatares.edit', compact('avatar'));
}

    public function update(Request $request, Avatar $avatar)
    {
        $validated = $request->validate([
            'nombre' => 'required',
        'apodo' => 'required',
        'rol' => 'required',
        'elemento' => 'required',
        'arma' => 'required',
        'edad' => 'required|integer',
        'especie' => 'required',
        ]);

        $usuario->update([
            'nombre' => $validated['nombre'],
            'apodo' => $validated['apodo'],
            'rol' => $validated['rol'],
            'elemento' => $validated['elemento'],
            'arma' => $validated['arma'],
            'edad' => $validated['edad'],
            'especie' => $validated['especie'],
            
        ]);

        return redirect()->route('usuarios.index');
    }

    public function destroy(Avatar $avatar)
    {
        $avatar->delete();
        return redirect()->route('avatares.index');
    }
}