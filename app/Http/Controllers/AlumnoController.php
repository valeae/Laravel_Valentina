<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Soy Valentina, mensaje por medio del controlador']);
    }
}
