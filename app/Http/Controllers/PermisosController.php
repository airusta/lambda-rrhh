<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermisosController extends Controller
{
    public function crear(){
        return view('solicitudes.permisos');
    }
}
