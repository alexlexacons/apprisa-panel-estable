
@extends('layouts.master')
@include('layouts.head')
@section('login')
<section id="">
    <div class="video-background">
        <div class="video-overlay"></div>
        <video playsinline autoplay muted loop>
            <source src="{{ asset('img/delivery-inicio.mp4') }}" type="video/mp4">
        </video>

        <div class="login-container">
            <form class="login-form-apprisa" method="POST" action="">
                @csrf
                <img class="logo-login-apprisa" src="{{ asset('img/logo.png') }}" alt="Logo de Apprisa">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Usuario" name="nombre" required>
                <input type="password" placeholder="Contraseña" name="contraseña" required>
                <a class="btnapprisa" href="{{ route('status') }}">Iniciar</a>
            </form>
        </div>
    </div>
</section>
@endsection

