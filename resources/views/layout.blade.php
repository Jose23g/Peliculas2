<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ secure_asset(mix('css/app.css')) }}" type="text/css">
    <link rel="stylesheet" href="{{ secure_asset('css/lightslider.css') }}" type="text/css">
    <link rel="stylesheet" href="/css/estilos.css" type="text/css">

    <script src="js/JQuery3.3.1.js" type="text/javascript"></script>
    <script src="{{ secure_asset(mix('js/app.js')) }}" type="text/javascript"></script>
    <script src="{{ secure_asset('js/lightslider.js') }}" type="text/javascript"></script>

    <title>Peliculas</title>
</head>

<body>
    <header class="flex navbar-header">
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
                <img src="//image.tmdb.org/t/p/w1280{{ $array['backdrop_path'] }}" class="imagen">
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
                            <img src="//image.tmdb.org/t/p/w1280{{ $pelicula['poster_path'] }}"
                                class="imagen">
                        </div>
                        <div class="peli-titulo">
                            <h5>{{ $pelicula['title'] }}</h5>
                            <div class="info-extra">
                                <span
                                    class="tiempo">{{ $pelicula['media_type'] }}</span>&nbsp;&nbsp;|&nbsp;&nbsp;
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

            <div id="carrusel" class="cs-hidden" style="color:white">
                @foreach ($estrenos as $estreno)
                    <div class="caratula-peli estreno">
                        <div class="peli-imagen">
                            <img src="//image.tmdb.org/t/p/w1280{{ $estreno['poster_path'] }}"
                                class="imagen">
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
                @endforeach
            </div>
        </div>
    </div>
        <footer class="footer">
            <div class="footer-contenido grid">
                <div class="logo">
                    <img src="/img/logo.png" class="logo_img">
                </div>
                <div class="footer-info grid">
                    <div class="arriba flex space_around">
                        <h6>Home</h6>
                        <h6>Schedule</h6>
                        <h6>Movies</h6>
                        <h6>News</h6>
                    </div>
                    <div class="abajo">
                        <div class="contacto">
                            <h6>adrian23gb@hotmail.com</h6>
                            <h6>+506 84499545</h6>
                        </div>
                    </div>
                </div>
                <div class="footer-redes">
                    <div class="redes">
                        <a href="#" class="redes-iconos"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="redes-iconos"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="redes-iconos"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="redes-iconos"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
        </footer>
        <script>
            $(document).ready(function() {
                var autoplaySlider = $('#carrusel').lightSlider({
                    auto: false,
                    loop: false,
                    pauseOnHover: true,
                    autoWidth: true,
                    adaptiveHeight: false,
                    slideMargin: 50,
                    onBeforeSlide: function(el) {
                        $('#current').text(el.getCurrentSlideCount());
                    }
                });
                $('#total').text(autoplaySlider.getTotalSlideCount());
            });
        </script>
</body>

</html>
