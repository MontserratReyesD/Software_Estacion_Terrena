<link rel='stylesheet' href='https://unpkg.com/bulma@0.9.1/css/bulma.min.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
@extends('layouts.app')
@section('content')
<section id='app' class='hero is-link is-fullheight'>
    <div class='hero-body'>
        <div class='container'>
            <div class='columns has-text-centered'>
                <div class='column'>
                    <h1 style='font-size: 2.5rem'>Termómetro</h1>
                    <i class='fa fa-thermometer-half' style='font-size: 4rem;'></i>
                </div>
            </div>
            <div class='columns'>
                <div class='column has-text-centered'>
                    <h2 class='is-size-4 has-text-warning'>Temperatura</h2>
                    <h2 id="tempExtra" class='is-size-1'>20.5 °C</h2>
                </div>
                <div class='column has-text-centered'>
                    <h2 class='is-size-4 has-text-warning'>Humedad</h2>
                    <h2 id="humExtra" class='is-size-1'>30.87 %</h2>
                </div>
                <div class='column has-text-centered'>
                    <h2 class='is-size-4 has-text-warning'>Temperatura</h2>
                    <h2 class='is-size-1'>25.0 °C</h2>
                </div>
                <div class='column has-text-centered'>
                    <h2 class='is-size-4 has-text-warning'>Humedad</h2>
                    <h2 class='is-size-1'>25.3 %</h2>
                </div>
            </div>
            <div class='columns'>
                <div class='column'>
                    <p>Última lectura: Hace <strong class='has-text-white'>5</strong> segundo(s)</p>
                </div>
            </div>
            <div class="row">
                <div class='columns'>
                    <div class='column mx-auto' >
                        <div class="card" style="width: 18rem; ">
                            <img class="card-img-top" src="{{asset('assets/img/pngwing.png')}}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">El sitio se esta contruyendo, vuelva más tarde...</p>
                            </div>
                            <a class="btn btn-warning text-dark" href="{{route('graficas')}}">
                                <i class="fa fa-arrow-left"></i>
                                Regresar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection