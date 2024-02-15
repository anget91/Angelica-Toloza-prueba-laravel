<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\Tiendas_productosController;
use Illuminate\Support\Facades\Route;

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

Route::post('/crearproductos',[ProductosController::class,'crearproducto']);
Route::post('/creartiendaproductos',[Tiendas_productosController::class,'crear']);

