<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprisaController extends Controller
{
    public function index (){
        $page = "pageOne";
        return view ("welcome", compact("page"));
    }

    public function estadistics (){
        $page = "pageEstadistics";
        return view ("estadisticas", compact("page"));
    }

    public function reporte(){
        $page = "pageReporte";
        return view ("reporte", compact("page"));
    }

    public function zonas(){
        $page = "pageZonas";
        return view ("zonas", compact("page"));
    }

    public function cuentas(){
        $page = "pageCuentas";
        return view ("cuentas", compact("page"));
    }

    public function admin(){
        $page = "pageAdmin";
        return view ("admin", compact("page"));
    }

    public function AutorizarCuentasRestaurante(){
        $page = "pageAutorizarCuentas";
        return view ("AutorizarCuentasRestaurante", compact("page"));
    }

    public function AutorizarCuentasRepartidor(){
        $page = "pageAutorizarCuentasRepartidor";
        return view ("AutorizarCuentasRepartidor", compact("page"));
    }

    public function ActivarCuentas(){
        $page = "pageActivarCuentas";
        return view ("ActivarCuentas", compact("page"));
    }

    public function activacionDesactivacionRestaurante(){
        $page = "pageactivacionDesactivacionRestaurante";
        return view ("activacionDesactivacionRestaurante", compact("page"));
    }

    public function activacionDesactivacionRepartidor(){
        $page = "pageactivacionDesactivacionRepartidor";
        return view ("activacionDesactivacionRepartidor", compact("page"));
    }

    public function activacionDesactivacionCliente(){
        $page = "pageactivacionDesactivacionCliente";
        return view ("activacionDesactivacionCliente", compact("page"));
    }
}