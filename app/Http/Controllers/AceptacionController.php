<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AceptacionController extends Controller
{
    public function crear(){
        return view('solicitudes.aceptacionpermisos');
    }
}
