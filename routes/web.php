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

Route::get('/estadisticas', [ApprisaController::class,"estadistics"])->name("estadisticas");

Route::get('/reporte', [ApprisaController::class,"reporte"])->name("reporte");

Route::get('/zonas', [ApprisaController::class,"zonas"])->name("zonas");

Route::get('/cuentas', [ApprisaController::class,"cuentas"])->name("cuentas");

Route::get('/admin', [ApprisaController::class,"admin"])->name("admin");