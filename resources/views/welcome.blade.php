
@extends('layouts.master')
@include('layouts.head')
@section('welcome')
<section id="">
    <div class="video-background">
        <div class="video-overlay"></div>
        <video playsinline autoplay muted loop>
            <source src="{{ asset('img/edificios.mp4') }}" type="video/mp4">
        </video>

        <div class="login-container">
            <form class="login-form-alba" method="POST" action="">
                @csrf
                <img class="logo-login" src="{{ asset('img/logoAlba.png') }}" alt="Logo de Apprisa">
                <input type="password" placeholder="Clave" name="contraseña" required>
                <a class="btn" href="{{ route('login') }}">Iniciar</a>
            </form>
        </div>
    </div>
</section>
@endsection

