<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GerenteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $query = DB::select("SELECT b.nombre 
                                    FROM usuario_rol a, rol b, usuario c 
                                    WHERE a.id_rol = b.id_rol and a.id_usuario = c.id_usuario and c.id_usuario = ?",
            [Auth::user()->id_usuario]);
        $var="";
        foreach ($query as $q){
            $var = $q->nombre;
        }
        if($var != "gerente"){
            return redirect()->route('home');
        }
        return $next($request);
    }
}
