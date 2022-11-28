<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function formulario(){
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];

        $person = Array('edad'=>$age,'nombre'=>$name,'apellido'=>$lastName
        );

        return View('MostrarDatos',['person'=>$person]);
    }

    public function mostrar(){
        return View('formulario');
    }
}
