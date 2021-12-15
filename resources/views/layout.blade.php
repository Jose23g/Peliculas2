<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/lightslider.css') }}" type="text/css">
    <link rel="stylesheet" href="/css/estilos.css" type="text/css">
    <link rel="stylesheet" href="/css/responsive.css" type="text/css">

    <script src="js/JQuery3.3.1.js" type="text/javascript"></script>
    <script src="{{ asset(mix('js/app.js')) }}" type="text/javascript"></script>
    <script src="{{ asset('js/lightslider.js') }}" type="text/javascript"></script>

    <title>Peliculas</title>
</head>

<body>
    <header class=" header-container flex navbar fixed-top navbar-expand-lg">
        <nav class="container grid">
            <div class="logo">
                <img src="/img/logo.png" class="logo_img">
            </div>
            <div class="opciones">
                <ul class="opciones flex">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Schedule</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </div>
        </nav>
    </header>
   
    @yield('content')
   
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
                slideMargin: 9,
                onBeforeSlide: function(el) {
                    $('#current').text(el.getCurrentSlideCount());
                }
            });
            $('#total').text(autoplaySlider.getTotalSlideCount());
        });

        $(function() {
            $(window).on("scroll", function() {
                if ($(window).scrollTop() > 50) {
                    $(".header-container").addClass("cambio");
                } else {
                    //remove the background property so it comes transparent again (defined in your css)
                    $(".header-container").removeClass("cambio");
                }
            });
        });
    </script>

</body>

</html>
