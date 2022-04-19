<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostreController;
use App\Http\Controllers\ClienteController;

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
    return view('main');
});

Route::get('postre/registro',[PostreController::class,'form_registro'])
  ->name("for_registroPostre");

Route::post('postre/registro',[PostreController::class,'registrar'])
  ->name("registrarPostre");

Route::get('postre/lista',[PostreController::class,'listar'])
  ->name("listado_postre");
  #----------------------------------postre

Route::get('postre/detalle/{id}', [PostreController::class, 'show'])
    ->name('detalle_postre');

Route::get('client/eliminar/{id}', [PostreController::class, 'eliminar'])
    ->name('eliminar_postre');

Route::get('postre/actualizar/{id}', [PostreController::class, 'getActualizar'])
    ->name('actualizar_postre');


Route::post('postre/actualizar', [PostreController::class, 'actualizar'])
    ->name('actializar_Postre');

 #---------------------cliente-----------------------

 Route::get('cliente/registro',[ClienteController::class,'form_registro'])
  ->name("for_registroCliente");

Route::post('cliente/registro',[ClienteController::class,'registrar'])
  ->name("registrarCliente");

Route::get('/',[ClienteController::class,'listar'])
  ->name("listado_cliente");
 #----------------------------------cliente
 Route::get('cliente/detalle/{id}', [ClienteController::class, 'show'])
    ->name('detalle_cliente');

Route::get('cliente/eliminar/', [ClienteController::class, 'eliminar'])
    ->name('eliminar_cliente');

Route::get('cliente/actualizar/{id}', [ClienteController::class, 'getActualizar'])
    ->name('actualizar_cliente');


Route::post('cliente/actualizar', [ClienteController::class, 'actualizar'])
    ->name('actializar_cliente');
