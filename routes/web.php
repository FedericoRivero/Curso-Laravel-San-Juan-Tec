<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\PerfilesController;
use App\Http\Controllers\IngresosController;
use App\Http\Controllers\GastosController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\EtiquetasController;
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

Route::resource('categorias', CategoriasController::class);

Route::resource('pagos', PagosController::class);

Route::resource('perfiles', PerfilesController::class);

Route::resource('ingresos', IngresosController::class);

Route::resource('gastos', GastosController::class);

Route::resource('items', ItemsController::class);

Route::resource('etiquetas', EtiquetasController::class);
