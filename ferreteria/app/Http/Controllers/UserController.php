<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public array $rules = [
        'Nombres' => 'required',
        'Apellidos' => 'required',//Unico en todos los usuarios |unique:users, nombre_usuario
        'Correo' => 'required',
        'Celular' => 'required',
        'Direccion' => 'required',
    ];



    public function index()
    {
        $roles = Rol::all();
        $users = User::all();
        return view('User.index', compact('roles','users'));
    }


    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Rol::all();
        return view('User.edit', compact('user','roles'));
    }

    public function update(Request $request, string $id)
    {
        Validator::make($request->all(), $this->rules)->validate();

        $user = User::find($id);

        $user->Nombres = $request->Nombres;
        $user->Apellidos = $request->Apellidos;
        $user->Correo = $request->Correo;
        $user->Celular = $request->Celular;
        $user->Direccion = $request->Direccion;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->Fecha_Registro = now();

        if (Auth::check() && Auth::user()->Roles_idRoles == 1) {
            $user->Roles_idRoles = $request->Roles_idRoles;
        }

        $user->save();

        return redirect('/User')->withSuccess('Usuario Actualizado Correctamente :D');
    }

    public function destroy(string $id)
    {
        $producto = User::find($id);
        $producto->delete();
        return redirect('/User')->withSuccess('Usuario Eliminado Correctamente :D');
    }
}
