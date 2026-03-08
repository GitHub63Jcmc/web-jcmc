
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIEN SOY - Mi primer Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}?v=1.0.4">
</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials._header')

    <div class="container-fluid m-auto hero">
    <div class="hero-inner">
        <div class="hero-text">
            <h1 class="welcome">WELCOME Who I am</h1>
            <h4>Pasión por el desarrollo y la arquitectura limpia.</h4>
            <h6 class="colorTexto">Hola, soy Joao Cabral. Mi viaje en el mundo de la tecnología comenzó hace más de 3 años, movido por una curiosidad insaciable sobre cómo funcionan las cosas en la web. Lo que empezó con simples etiquetas HTML5 y estilos en CSS3, se ha convertido hoy en mi profesión y mi pasión.
            </h6>
            <h4>Mi Evolución Técnica:</h4>
            <h6 class="colorTexto">A lo largo de mi trayectoria, he evolucionado desde el diseño de interfaces dinámicas con JavaScript y React, hasta la construcción de sistemas robustos y escalables utilizando PHP y Laravel. Mi enfoque no es solo escribir código que funcione, sino crear soluciones eficientes, seguras y fáciles de mantener.
            </h6>
            <h4>¿Cómo trabajo?</h4>
            <h6 class="colorTexto">Me especializo en el ecosistema Full Stack, lo que me permite entender el ciclo completo de una aplicación: desde la experiencia de usuario en el frontend hasta el diseño inteligente de bases de datos en MySQL.
            </h6>
            <ul>
                <li class="colorTexto">Lógica y Orden: Soy un firme defensor del código limpio y las buenas prácticas.</li>
            </ul>
            <ul>
                <li class="colorTexto">Aprendizaje Constante: El sector cambia cada día, y yo evoluciono con él (actualmente enfocado en las últimas versiones de Laravel).</li>
            </ul>
            <ul>
                <li class="colorTexto">Compromiso: No solo entrego proyectos, construyo herramientas que aportan valor real.</li>
            </ul>
        </div>
        <div class="hero-image m-1">
            <picture>
                <source srcset="{{ asset('img/hero_setup.avif') }}">
                <source srcset="{{ asset('img/hero_setup.webp') }}">
                <img src="{{ asset('img/hero_setup.jpg') }}" alt="Imagen Inicio">
            </picture>
        </div>
    </div>
    </div>
    @include('partials._footer')
    <script src="{{ asset('js/menu.js') }}?v=1.0.1"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
