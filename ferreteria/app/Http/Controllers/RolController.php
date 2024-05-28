<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RolController extends Controller
{
    public array $rules = [
        'Nombre' => 'required'

    ];

    public function index()
    {
        $roles = Rol::all();
        return view('Rol.index', compact('roles'));
    }

    public function create()
    {
        return view('Rol.create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), $this->rules)->validate();

        $rol = new Rol();

        $rol->Nombre = $request->Nombre;

        $rol->save();

        return redirect()->route('Rol.index')->withSuccess('Rol Creado Correctamente :D');
    }

    public function edit(string $id)
    {
        $rol = Rol::find($id);
        return view('Rol.edit', compact('rol'));
    }

    public function update(Request $request, string $id)
    {

        Validator::make($request->all(), $this->rules)->validate();

        $rol = Rol::find($id);

        $rol->Nombre = $request->Nombre;

        $rol->save();

        return redirect()->route('Rol.index')->withSuccess('Rol Actualizado Correctamente :D');
    }

    public function destroy(string $id)
    {
        $rol = Rol::find($id);
        $rol->delete();
        return redirect('/Rol')->withSuccess('Rol Eliminado Correctamente :D');
    }
}
