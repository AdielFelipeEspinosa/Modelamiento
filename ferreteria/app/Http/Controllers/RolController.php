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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Rol::all();
        return view('Rol.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Rol.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), $this->rules)->validate();

        $rol = new Rol();

        $rol->Nombre = $request->Nombre;

        $rol->save();

        return redirect()->route('Rol.index')->withSuccess('Rol Creado Correctamente :D');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rol = Rol::find($id);
        return view('Rol.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, string $id)
    {

        Validator::make($request->all(), $this->rules)->validate();

        $rol = Rol::find($id);

        $rol->Nombre = $request->Nombre;

        $rol->save();

        return redirect()->route('Rol.index')->withSuccess('Rol Actualizado Correctamente :D');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rol = Rol::find($id);
        $rol->delete();
        return redirect('/Rol')->withSuccess('Rol Eliminado Correctamente :D');
    }
}
