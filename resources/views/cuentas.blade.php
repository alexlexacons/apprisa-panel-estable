@extends('layouts.master')
@section('cuentas')
@include('layouts.head')
@include('layouts.sidebar')
<section id="content">
   @include('layouts.nav')
   <main>
      <div class="head-title">
         <div class="left">
            <h1>Administrador de cuentas</h1>
            <ul class="breadcrumb">
               <li>
                  <a href="#">Panel</a>
               </li>
               <li><i class='bx bx-chevron-right' ></i></li>
               <li>
                  <a class="active" href="#">Administrador de cuentas</a>
               </li>
            </ul>
         </div>
         <a href="#" class="btn-download">
         <i class='bx bxs-cloud-download' ></i>
         <span class="text">Descargar PDF</span>
         </a>
      </div>
      <div class="container-opciones-autorizar-cuentas">
        <h2>Autorizar cuentas</h2>
         <ul class="box-info">
            <li>
               <i class='bx bx-store-alt' ></i>
               <span class="text">
                  <h3>Resturantes</h3>
                  <a href="{{ route('AutorizarCuentasRestaurante') }}">Empezar</a>
               </span>
            </li>
            <li>
               <i class='bx bx-car'></i>
               <span class="text">
                  <h3>Repartidores</h3>
                  <a href="{{ route('AutorizarCuentasRepartidor') }}">Empezar</a>
               </span>
            </li>
         </ul>
      </div>
      <div class="container-opciones-activacion-cuentas">
        <h2>Activacion y desactivacion</h2>
         <ul class="box-info">
            <li>
               <i class='bx bx-power-off'></i>
               <span class="text">
                  <h3>Activacion y desactivacion de cuentas</h3>
                  <a href="{{ route('ActivarCuentas') }}">Empezar</a>
               </span>
            </li>
         </ul>
      </div>
   </main>
</section>
@endsection
