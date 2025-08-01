
@include('partials._header')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto - Web-jcmc</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">

<div class="container-fluid m-auto hero">
    <div class="hero-inner">
        <div class="hero-text">
        <h1 class="welcome">WELCOME CONTACTO</h1>
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

<div class="container my-5">
    <h2 class="text-center mb-4 colorTexto">Contáctame</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contacto.enviar') }}">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label colorTexto">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label colorTexto">Correo electrónico</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label colorTexto">Mensaje</label>
            <textarea name="mensaje" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<div class="container my-5 colorTexto">
    <h3>Otras formas de contactarme</h3>
    <ul class="list-unstyled">
        <li><strong>Email:</strong> <a href="mailto:jcmcgoojcmc@gmail.com">jcmcgoojcmc@gmail.com</a></li>
        <li><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/tuusuario" target="_blank">/tuusuario</a></li>
        <li><strong>GitHub:</strong> <a href="https://github.com/GitHub63Jcmc" target="_blank">/GitHub63Jcmc</a></li>
    </ul>
</div>



@include('partials._footer')
<script src="{{ asset('js/menu.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>