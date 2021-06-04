<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\PlantaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ViveroController;

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

Route::resources([
    'files'=>FileController::class
]);

Route::resources([
    'clientes'=>ClienteController::class
]);

Route::resources([
    'compras'=>CompraController::class
]);

Route::resources([
    'direccions'=>DireccionController::class
]);

Route::resources([
    'plantas'=>PlantaController::class
]);

Route::resources([
    'provedors'=>ProveedorController::class
]);

Route::resources([
    'ventas'=>VentaController::class
]);

Route::resources([
    'viveros'=>ViveroController::class
]);

/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
