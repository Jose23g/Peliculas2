@extends('layout')
@section('banner')
    <div class="banner_img">
        <img src="//image.tmdb.org/t/p/w1280{{ $array['backdrop_path'] }}" class="imagen img-banner">
    </div>
    <div class="informacion grid">
        <div class="titulo">
            <h1>{{ $array['title'] }}</h1>
            <div class="descripcion">
                <p class="text-descripcion">{{ $array['overview'] }}</p>
            </div>
            <div class="botones flex">
                <a href="{{ $array['homepage'] }}" class="boton-verpeli">Ver pelicula</a>
                <a href="{{ $array['homepage'] }}" class="boton-masinfo">Mas informacion</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="">
        <div class="muestra2 grid">
            <h2>Recomendadas esta semana</h2>
            <div class="busqueda flex">
                <input class="form-control input-busqueda" type="search" placeholder="Search" aria-label="Search">
            </div>
        </div>
        <div class="linea"></div>
        <div class="categoria">
            <a href="#" class="boton-masinfo boton-cat">All films</a>
            <a href="#" class="boton-masinfo boton-cat">2D</a>
            <a href="#" class="boton-masinfo boton-cat">3D</a>
            <a href="#" class="boton-masinfo boton-cat">IMAX</a>
            <a href="#" class="boton-masinfo boton-cat">IMAX 3D</a>
        </div>
        <div class="peliculas-seccion grid">
            @foreach ($populares as $pelicula)
                <a class="links" href="{{ route('pelicula.info', $pelicula['id']) }}">
                    <div class="caratula-peli">
                        <div class="peli-imagen">
                            <img src="//image.tmdb.org/t/p/w1280{{ $pelicula['poster_path'] }}" class="imagen">
                        </div>
                        <div class="peli-titulo">
                            <h5>{{ $pelicula['title'] }}</h5>
                            <div class="info-extra">
                                <span class="tiempo">{{ $pelicula['media_type'] }}</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <span class="calificacion">{{ $pelicula['vote_average'] }}%</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="muestra2">
            <h4>En camino...</h4>
        </div>
        <div class="linea"></div>

        <div id="carrusel" class="cs-hidden" style="color:white">
            @foreach ($estrenos as $estreno)
                <a class="links" href="{{ route('pelicula.info', $estreno['id']) }}">
                    <div class="caratula-peli estreno">
                        <div class="peli-imagen">
                            <img src="//image.tmdb.org/t/p/w1280{{ $estreno['poster_path'] }}" class="imagen">
                        </div>
                        <div class="peli-titulo">
                            <h5>{{ $estreno['title'] }}</h5>
                            <div class="info-extra">
                                <span
                                    class="tiempo">{{ $estreno['release_date'] }}</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                                <span class="calificacion">{{ $estreno['vote_average'] }}%</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>  
    <script src="{{ asset('js/archivo.js') }}" type="text/javascript"></script>
@endsection
