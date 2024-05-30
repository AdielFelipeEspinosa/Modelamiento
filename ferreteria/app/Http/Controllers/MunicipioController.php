<?php

namespace App\Http\Controllers;
 
use App\Models\Municipio;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class MunicipioController extends Controller
{
    public array $rules = [
        'Nombre' => 'required'

    ];

    public function index()
    {
        $municipios = Municipio::all();
        return view('Municipio.index', compact('municipios'));
    }

    public function create()
    {
        return view('Municipio.create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), $this->rules)->validate();

        $municipio = new Municipio();

        $municipio->Nombre = $request->Nombre;

        $municipio->save();

        return redirect()->route('Municipio.index')->withSuccess('Departamento Creado Correctamente :D');
    }

    public function edit(string $id)
    {
        $municipio = Municipio::find($id);
        return view('Municipio.edit', compact('municipio'));
    }

    public function update(Request $request, string $id)
    {

        Validator::make($request->all(), $this->rules)->validate();

        $municipio = Municipio::find($id);

        $municipio->Nombre = $request->Nombre;

        $municipio->save();

        return redirect()->route('Municipio.index')->withSuccess('Departamento Actualizado Correctamente :D');
    }

    public function destroy(string $id)
    {
        $municipio = Municipio::find($id);
        $municipio->delete();
        return redirect('/Municipio')->withSuccess('Departamento Eliminado Correctamente :D');
    }
}
