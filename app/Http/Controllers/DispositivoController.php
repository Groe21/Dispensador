<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;

class DispositivoController extends Controller
{
    public function index()
    {
        return Dispositivo::all();
    }
}
