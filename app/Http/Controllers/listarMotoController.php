<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listarMotoController extends Controller
{
    public function mostrar()
    {
        return view('listarMoto');
    }
}
