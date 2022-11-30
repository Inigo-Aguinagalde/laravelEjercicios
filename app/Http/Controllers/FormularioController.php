<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function formulario()
    {
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];

        $person = array(
            'edad' => $age, 'nombre' => $name, 'apellido' => $lastName
        );

        return View('MostrarDatos', ['person' => $person]);
    }

    public function mostrar()
    {
        return View('formulario');
    }

    public function mostrar2()
    {
        return View('formulario2');
    }


    public function links_100()
    {
        return View('formularioProducto');
    }

    public function mostrarTabla(Request $person)
    {

        $validated = $person->validate([
            'name' => 'required|max:255',
            'lastName' => 'required|max:255',
            'age' => 'required'

        ]);




        return View('mostrarTabla', ['person' => $validated]);
    }

    public function formularioProductos()
    {
        return View('formularioProducto');
    }


    public function links(Request $request)
    {
        $validated = $request->validate([
            'producto' => 'required|max:255',
        ]);

        return View('mostrarLinks', ['producto' => $validated]);
    }

    public function consultar($producto, $id)
    {
        $user = consultar::findOrFail(1);
        return view('home')->with('user', $user);
        echo "algo";
        //return View('producto',['producto'=>$producto]);

    }
}
