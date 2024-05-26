<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Cliente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(Auth::user()->Roles_idRoles==1 or auth::user()->Roles_idRoles==2){
                    return $next($request);
            }else{
                return redirect('/index')->withMessage('No tienes permiso para acceder a esta pagina');
            }
        }else{
            return redirect('/index')->withMessage('Inicia Secion Primero :3');
        }
    }
}