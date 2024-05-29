<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class DepartamentoController extends Controller
{
    public array $rules = [
        'Nombre' => 'required',
        'Municipios_idMunicipios' => 'required'

    ];

    public function index()
    {
        $departamentos = Departamento::all();
        return view('Departamento.index', compact('departamentos'));
    }

    public function create()
    {
        $municipios = Municipio::all();
        return view('Departamento.create', compact('municipios'));
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), $this->rules)->validate();

        $departamento = new Departamento();

        $departamento->Nombre = $request->Nombre;
        $departamento->Municipios_idMunicipios = $request->Municipios_idMunicipios;

        $departamento->save();

        return redirect()->route('Departamento.index')->withSuccess('Departamento Creado Correctamente :D');
    }

    public function edit(string $id)
    {
        $departamento = Departamento::find($id);
        $municipios = Municipio::all();
        return view('Departamento.edit', compact('departamento','municipios'));
    }

    public function update(Request $request, string $id)
    {

        Validator::make($request->all(), $this->rules)->validate();

        $departamento = Departamento::find($id);

        $departamento->Nombre = $request->Nombre;
        $departamento->Municipios_idMunicipios = $request->Municipios_idMunicipios;

        $departamento->save();

        return redirect()->route('Departamento.index')->withSuccess('Departamento Actualizado Correctamente :D');
    }

    public function destroy(string $id)
    {
        $departamento = Departamento::find($id);
        $departamento->delete();
        return redirect('/Departamento')->withSuccess('Departamento Eliminado Correctamente :D');
    }
}
