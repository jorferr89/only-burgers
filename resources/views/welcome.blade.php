@extends('layouts.app')

@section('title', 'Only Burgers')

@section('styles')
    
@endsection

@section('content')

<div class="container bg-light text-dark rounded p-2">
    <div class="row">
        <div class="col">
            <h2 align="center">Only Burgers</h2>
            <hr>
            <p class="lead text-secondary mb-2">
                ¡Bienvenidos a Only Burgers! Acá te ofrecemos las mejores hamburguesas de la ciudad, 
                hechas con los ingredientes más frescos y de calidad. ¿Te gustan las clásicas o sos 
                de probar cosas nuevas? Tenemos opciones para todos los gustos. Venite a disfrutar de 
                una experiencia única, con el auténtico sabor que sólo nosotros sabemos ofrecerte. 
                ¡Te esperamos!
            </p>

            <p class="lead text-secondary mb-2">
                HORARIO DE ATENCIÓN: de 19:00 a 01:00 hs.
            </p>

            <p class="lead text-secondary mb-2">
                DIRECCIÓN: Alvear 1041 - Apóstoles - Misiones
            </p>
        </div>
        <div class="col" style="text-align: center;">
            @guest
                <div class="d-grid gap-2">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary">
                        Ingresar
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary">
                        Registrarme
                    </a>
                </div>
            @else

                <div class="d-grid gap-2">
                    <a href="{{ route('home') }}" class="btn btn-outline-primary">
                        Ir a Inicio
                    </a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-outline-danger">
                        Salir
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @endguest

            <img class="img-fluid mb-4" src="burger.jpg" style="max-width: 100%; height: 230px;">
        </div>
    </div>
</div>

@endsection
