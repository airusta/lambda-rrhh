<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $query = DB::select("SELECT b.nombre 
                                    FROM usuario_rol a, rol b, usuario c 
                                    WHERE a.id_rol = b.id_rol and a.id_usuario = c.id_usuario and c.id_usuario = ?",
            [Auth::user()->id_usuario]);

        return view('home')->with('rol',$query);
    }
}
