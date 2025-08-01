
@include('partials._header')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG - Mi primer Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">

<div class="container-fluid m-auto hero">
    <div class="hero-inner">
        <div class="hero-text">
        <h1 class="welcome">WELCOME MY BLOG</h1>
            <h6 class="colorTexto">Desarrollador Web en formación con 3 años de experiencia, práctica en el desarrollo de sitios web y aplicaciones a través de proyectos personales y cursos especializados. Habilidad en tecnologías como HTML5, CSS3, JavaScript, y PHP, con conocimientos en WordPress, bases de datos (MySQL) y el uso de frameworks modernos como Bootstrap. Motivado para seguir aprendiendo y aplicando nuevas tecnologías, y con experiencia previa en la gestión de proyectos y atención al detalle, adquirida durante una extensa carrera en estos últimos años.
            </h6>
        </div>
        <div class="hero-image m-1">
            <picture>
                <source srcset="{{ asset('img/hero_setup.avif') }}" alt="Imagen Inicio">
                <source srcset="{{ asset('img/hero_setup.webp') }}" alt="Imagen Inicio">
                <img src="{{ asset('img/hero_setup.jpg') }}" alt="Imagen Inicio">
            </picture>
        </div>
    </div>
</div>

@include('partials._footer')
<script src="{{ asset('js/menu.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>