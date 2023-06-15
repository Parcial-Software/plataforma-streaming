<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GeneroController extends Controller
{
    public function index()
    {
        $generos = Genero::all();
        return view('genero.index', compact('generos'));
    }

    public function show($id)
    {
        $genero = Genero::findOrFail($id);
        return view('genero.show', compact('genero'));
    }

    public function create()
    {
        return view('genero.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'imagen' => 'required|image',
        ]);

        //Image
        $imageName = time() . '_' . $request->image->getClientOriginalName();
        $pathImage = $request->image->storeAs('public/images/', $imageName);
        $urlImage = Storage::url($pathImage);

        $genero = new Genero();
        $genero->nombre = $request->nombre;
        $genero->imagen = $urlImage;
        $genero->save();

        return redirect()->route('generos.index')->with('success', 'Genero creado correctamente');
    }
}
