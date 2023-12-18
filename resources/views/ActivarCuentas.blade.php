@extends('layouts.master')
@section('ActivarCuentas')
@include('layouts.head')
@include('layouts.sidebar')
<section id="content">
    @include('layouts.nav')

    <main>
        <div class="head-title">
            <div class="left">
                <h1>Activar cuentas</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Panel</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Activar cuentas</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download' ></i>
                <span class="text">Descargar PDF</span>
            </a>
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-user-circle' ></i>
                <span class="text">
                    <h3>Cliente</h3>
                    <a href="{{ route('activacionDesactivacionCliente') }}">Empezar</a>
                </span>
            </li>
            <li>
                <i class='bx bx-car'></i>
                <span class="text">
                    <h3>Repartidor</h3>
                    <a href="{{ route('activacionDesactivacionRepartidor') }}">Empezar</a>
                </span>
            </li>
            <li>
                <i class='bx bx-store-alt' ></i>
                <span class="text">
                    <h3>Restaurante</h3>
                    <a href="{{ route('activacionDesactivacionRestaurante') }}">Empezar</a>
                </span>
            </li>
        </ul>
    </main>
</section>
@endsection
