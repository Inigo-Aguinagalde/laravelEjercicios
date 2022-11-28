<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductosController extends Controller
{
    public function codigo($codigo)
    {
        if (strlen($codigo) != 7) {
            echo "codigo no valido";
            return Redirect::to('/');
        }

        $codigoArr = str_split($codigo);
        
        $letras = 0;
        $num = 0;
        for ($i = 0; $i < count($codigoArr); $i++) {
            if (preg_match("/[a-z]/i", $codigoArr[$i])) {
                $letras++;
            }else{
                $num++;
            }
            
        }
        if($num>4 || $letras>3){
            echo "codigo no valido";
        }else{
            return View('codigo',['codigo'=> $codigo]);
        }
    }
}
