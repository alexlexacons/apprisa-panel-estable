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

}
