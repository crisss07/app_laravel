<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function prueba()
    {
        return response()->json(['mensaje' => 'correcto'], 200);
    }
}
