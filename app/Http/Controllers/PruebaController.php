<?php

namespace App\Http\Controllers;

use App\Prueba;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index()
    {
        return response()->json(['mensaje' => 'correcto'], 200);
    }

    public function prueba()
    {
        $users = Prueba::get();
        dd($users);

        return response()->json(['usuarios' => $users], 200);
    }
}
