<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DNIController;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\FormularioController;
use PhpParser\Node\Stmt\Return_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/prueba', 'App\Http\Controllers\HelloController@index');

Route::get('/nombre', 'App\Http\Controllers\NombreController@index');
 
Route::get('/users/{nombre}', [DNIController::class, 'usuario']);

Route::get('/dniNumeros/{dni}', [DNIController::class, 'dniNumeros']);

Route::get('/dniLetrea/{dni}', [DNIController::class, 'dniLetrea']);

Route::get('/productos/{codigo}', [ProductosController::class, 'codigo']);

Route::get('/registro',[FormularioController::class,'mostrar']);

Route::get('/registro2',[FormularioController::class,'mostrar2']);

Route::post('enviarDatos', [FormularioController::class,'formulario'])->name('enviarDatos');


Route::post('mostrarTabla', [FormularioController::class,'mostrarTabla'])->name('enviarDatos2');

Route::post('/procesaForm3', [FormularioController::class,'links'])->name('procesaForm3');;

Route::get('/consultar/{producto}/{id}',[FormularioController::class,'consultar'])->name('consultar');

Route::get('/formularioProducto',[FormularioController::class,'formularioProductos']);
