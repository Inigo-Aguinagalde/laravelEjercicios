<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DNIController extends Controller
{
    public function usuario($name)
    {
        $nombre = $name;
        
        return View('user', ['nombre' => $nombre]);
    }

    public function dniNumeros($dni)
    {
        if (preg_match("/[a-z]/i", $dni)) {
            echo "El dni no puede tener una letra";
        } elseif (strlen($dni) > 8) {
            echo "El dni no puede tener mas de 8 caracteres";
        } elseif (strlen($dni) < 8) {
            echo "No es un dni valido";
        } else {
            return View('dni', ['dni' => $dni]);
        }
    }

    public function dniLetrea($dni)
    {
        if (preg_match("/[a-z]/i", $dni)) {
            echo "El dni no puede tener una letra";
        } elseif (strlen($dni) > 8) {
            echo "El dni no puede tener mas de 8 caracteres";
        } elseif (strlen($dni) < 8) {
            echo "No es un dni valido";
        } else {
            $dni .=  "L";
            return View('dni', ['dni' => $dni]);
        }
    }
}
