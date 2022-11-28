<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NombreController extends Controller
{
    
    public function index()
     {
        $text = "Iñigo";
        return view('Nombre', ['text' => $text]);
     }

}
