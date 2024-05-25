<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function indexLogin()
    {
        return view('auth.login');
    }

    public function indexRegister()
    {
        return view('auth.register');
    }

    public array $rules = [
        'Nombres' => 'required',
        'Apellidos' => 'required',//Unico en todos los usuarios |unique:users, nombre_usuario
        'Correo' => 'required',
        'Celular' => 'required',
        'Direccion' => 'required',
        'password' => 'required|min:8',
        'password_confirmation' => 'required|same:password'//Verificar si el campo de contraseña es el mismo
    ];

    public function postRegister(Request $request)
    {
        Validator::make($request->all(), $this->rules)->validate();

        $user = new User();

        $user->Nombres = $request->Nombres;
        $user->Apellidos = $request->Apellidos;
        $user->Correo = $request->Correo;
        $user->Celular = $request->Celular;
        $user->Direccion = $request->Direccion;
        $user->password = Hash::make($request->password);
        $user->Fecha_Registro = now();

        $user->save();

        return redirect()->route('login')->withSuccess('Registrado Correctamente :D');
    }

    public function postLogin(Request $request)
    {

        $credentials = [
            "Correo" => $request->Correo,
            "password" => $request->password
        ];
        
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended('index')
            ->withSuccess('Logueado Correctamente :D');

        } else {
            return redirect('login')->withMessage('Colocaste credenciales invalidas :c');
        }
    }

    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('index')->withSuccess('Ha salido de la cuenta :D');
    }
}
