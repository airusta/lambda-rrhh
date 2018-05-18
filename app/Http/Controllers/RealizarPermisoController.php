<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealizarPermisoController extends Controller
{
    public function crear(){
        return view('solicitudes.realizarpermiso');
    }
}
