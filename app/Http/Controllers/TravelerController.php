<?php

namespace App\Http\Controllers;

use App\Models\Traveler;
use Illuminate\Http\Request;

class TravelerController extends Controller
{
  
    public function index()
    {
        $travelers = Traveler::all();
        return view('travelers.index', compact('travelers'));
    }

    public function create()
    {
        return view('travelers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Dni' => 'required',
            'Nombre' => 'required',
            'Telefono' => 'required',
            'Direccion' => 'required',
        ]);

        Traveler::create($request->all());

        return redirect()->route('travelers.index');
        
    }

    public function show(Traveler $traveler)
    {
        return view('Travelers.show', compact('traveler'));
    }

    public function edit(Traveler $traveler)
    {
        return view('Travelers.edit', compact('traveler'));
    }

    public function update(Request $request, Traveler $traveler)
    {
        $request->validate([
            'Dni' => 'required',
            'Nombre' => 'required',
            'Telefono' => 'required',
            'Direccion' => 'required',
        ]);

        $traveler->update($request->all());

        return redirect()->route('travelers.index');
    }

    public function destroy(Traveler $traveler)
    {
        $traveler->delete();

        return redirect()->route('travelers.index');
    }
}

////teachers.index->with('success', 'Profesor creado con exito.')

