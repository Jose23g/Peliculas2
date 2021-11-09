<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilos.css" type="text/css">
    <link type="text/css" rel="stylesheet" href="css/lightslider.css" />
    <!-- lightSlider css -->
<link rel="stylesheet" href="{{asset('css/libs/lightslider.css')}}">

<!-- lightGalley css -->
<link rel="stylesheet" href="{{asset('css/libs/lightgallery.css')}}">

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    // Do not include both lightslider.js and lightslider.min.js

    <title>Peliculas</title>
</head>

<body>
    <header class="grid">
        <div class="container grid">
            <div class="logo">
                <img src="/img/logo.png" class="logo_img">
            </div>
            <div class="opciones">
                <ul class="opciones flex">
                    <li>Home</li>
                    <li>Schedule</li>
                    <li>Movies</li>
                    <li>News</li>
                </ul>
            </div>
        </div>
    </header>
    <div class="banner">
        <div class="tarjetas" style=>
            <div class="banner_img">
                <img src="https://image.tmdb.org/t/p/w1280{{ $array['backdrop_path'] }}" class="imagen">
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
        </div>
    </div>
    <div class="cuerpo">
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
                    <div class="caratula-peli">
                        <div class="peli-imagen">
                            <img src="https://image.tmdb.org/t/p/w1280{{ $pelicula['poster_path'] }}"
                                class="imagen">
                        </div>
                        <div class="peli-titulo">
                            <h5>{{ $pelicula['title'] }}</h5>
                            <div class="info-extra">
                                <span class="tiempo">{{ $pelicula['media_type'] }}</span>|
                                <span class="calificacion">{{ $pelicula['vote_average'] }}%</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="muestra2">
                <h4>En camino...</h4>
            </div>
            <div class="linea"></div>
            <div class="estrenos-seccion">
                <ul id="light-slider">
                    <li>
                        <h3>First Slide</h3>
                        <p>Lorem ipsum Cupidatat quis pariatur anim.</p>
                    </li>
                    <li>
                        <h3>Second Slide</h3>
                        <p>Lorem ipsum Excepteur amet adipisicing fugiat velit nisi.</p>
                    </li>
                    ...
                </ul>
                
            </div>
        </div>
    </div>
    <!-- lightGallery js -->
<script type="text/javascript" src="{{asset('js/libs/lightgallery.js')}}"></script>

<!-- lightGallery Thumbnails plugin -->
<script type="text/javascript" src="{{asset('js/libs/lg-thumbnail.js')}}"></script>

<!-- lightSlider js -->
    <script type="text/javascript" src="{{asset('js/libs/lightslider.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    $('#imageGallery').lightSlider({
        gallery:true,
        item:1,
        loop:true,
        thumbItem:9,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left',
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '#imageGallery .lslide'
            });
        }   
    });  
  });
  </script>
    
</body>

</html>
