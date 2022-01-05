@extends('layout')
@section('banner')
    <div class="banner_img">
        <img src="//image.tmdb.org/t/p/w1280{{ $array['backdrop_path'] }}" class="imagen img-banner">
    </div>
@endsection
@section('content')
    <div class="">
        <div class="info-detalle grid">
            <div class="info-hijo">
                <div class="caratula-peli">
                    <div class="peli-imagen">
                        <img src="//image.tmdb.org/t/p/w1280{{ $array['poster_path'] }}" class="imagen">
                    </div>
                </div>
            </div>
            <div class="contenedor-overview">
                <h1>Historia</h1>
                <p class="overview">{{ $array['overview'] }}</p>
            </div>
            <div class="contenedor-detalle">
                <h1>Detalles</h1>
                <div class="detalle">
                    <div class="detalle-titulo flex space_between">
                        <h5>Titulo original</h5>
                        <p>{{ $array['original_title'] }}</p>
                    </div>
                    <hr>
                    <div class="detalle-titulo flex space_between">
                        <h5>Fecha de estreno</h5>
                        <p>{{ $array['release_date'] }}</p>
                    </div>
                    <hr>
                    <div class="detalle-titulo flex space_between">
                        <h5>Duracion</h5>
                        <p>{{ $array['runtime'] }} minutos</p>
                    </div>
                    <hr>
                    <div class="detalle-titulo flex space_between">
                        <h5>Idioma</h5>
                        <p>{{ $array['original_language'] }}</p>
                    </div>
                    <hr>
                    <div class="detalle-titulo flex space_between">
                        <h5>Calificacion</h5>
                        <p>{{ $array['vote_average'] }}%</p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <h1>Elenco</h1>
        <div class="linea"></div>
        <div class="elenco flex space_between cs-hidden" id="carrusel">
            @foreach ($elenco['cast'] as $cast)
                <div class="elenco-hijo">
                    <div class="elenco-imagen">
                        <img src="//image.tmdb.org/t/p/w1280{{ $cast['profile_path'] }}" class="imagen">
                    </div>
                    <div class="elenco-nombre">
                        <p>{{ $cast['name'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection
