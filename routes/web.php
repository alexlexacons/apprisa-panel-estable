<?php

use App\Http\Controllers\ApprisaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ApprisaController::class,"index"])->name("index");

Route::get('/status', [ApprisaController::class,"status"])->name("status");

Route::get('/estadisticas', [ApprisaController::class,"estadistics"])->name("estadisticas");

Route::get('/reporte', [ApprisaController::class,"reporte"])->name("reporte");

Route::get('/zonas', [ApprisaController::class,"zonas"])->name("zonas");

Route::get('/cuentas', [ApprisaController::class,"cuentas"])->name("cuentas");

Route::get('/admin', [ApprisaController::class,"admin"])->name("admin");

Route::get('/AutorizarCuentasRestaurante', [ApprisaController::class,"AutorizarCuentasRestaurante"])->name("AutorizarCuentasRestaurante");

Route::get('/AutorizarCuentasRepartidor', [ApprisaController::class,"AutorizarCuentasRepartidor"])->name("AutorizarCuentasRepartidor");

Route::get('/ActivarCuentas', [ApprisaController::class,"ActivarCuentas"])->name("ActivarCuentas");

Route::get('/activacionDesactivacionRestaurante', [ApprisaController::class,"activacionDesactivacionRestaurante"])->name("activacionDesactivacionRestaurante");

Route::get('/activacionDesactivacionRepartidor', [ApprisaController::class,"activacionDesactivacionRepartidor"])->name("activacionDesactivacionRepartidor");

Route::get('/activacionDesactivacionCliente', [ApprisaController::class,"activacionDesactivacionCliente"])->name("activacionDesactivacionCliente");

Route::get('/login', [ApprisaController::class,"login"])->name("login");
