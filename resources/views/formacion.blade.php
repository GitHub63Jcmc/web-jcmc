
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMACIÓN</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}?v=1.0.3">
</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials._header')

    <div class="container-fluid m-auto hero">
    <div class="hero-inner">
        <div class="hero-text">
            <h1 class="welcome">WELCOME MY TRAINING</h1>
            <h6 class="colorTexto">Desarrollador Web en formación con 3 años de experiencia, práctica en el desarrollo de sitios web y aplicaciones a través de proyectos personales y cursos especializados. Habilidad en tecnologías como HTML5, CSS3, JavaScript, y PHP, con conocimientos en WordPress, bases de datos (MySQL) y el uso de frameworks modernos como Bootstrap. Motivado para seguir aprendiendo y aplicando nuevas tecnologías, y con experiencia previa en la gestión de proyectos y atención al detalle, adquirida durante una extensa carrera en estos últimos años.
            </h6>
        </div>
        <div class="hero-image m-1">
            <picture>
                <source srcset="{{ asset('img/hero_setup.avif') }}" type="image/avif">
                <source srcset="{{ asset('img/hero_setup.webp') }}" type="image/webp">
                <img src="{{ asset('img/hero_setup.jpg') }}" alt="Configuración de desarrollo">
            </picture>
        </div>
    </div>
    </div>

    <!-- -------  Formación y Educación ---------------------------- -->

    <div class="container mt-2">
        <h2 class="text-center welcome">Formación Académica</h2>
        @foreach($formaciones as $formacion)
            <div class="card m-5 colorTexto">
                <div class="card-body fondosDatos">
                    <h3 class="mb-5"><strong>Centro de Formación:</strong></h3>

                    <h4><span class="elSpan text-decoration-underline"> {{ $formacion->centro_formacion }} </span></h4>
                    <p class="text-start px-5 mt-5"><strong class="titulosDatos">Título del Curso: </strong> <span class="colorTexto"> {{ $formacion->titulo_curso }}</span></p>
                    <p class="text-start px-5"><strong class="titulosDatos">Fechas Inicio: </strong> <span class="colorTexto">{{ \Carbon\Carbon::parse($formacion->fecha_inicio)->format('d/m/Y') }}</span></p>
                    <p class="text-start px-5"><strong class="titulosDatos">Fechas Final: </strong> <span class="colorTexto">{{ \Carbon\Carbon::parse($formacion->fecha_fin)->format('d/m/Y') }}</span></p>
                    <p class="text-start px-5"><strong class="titulosDatos">Horas formativas: </strong> <span class="colorTexto">{{ $formacion->horas_formativas }}</span></p>
                    <p class="text-start px-5"><strong class="titulosDatos">Formación/Código del curso: </strong> <span class="colorTexto">{{ $formacion->codigo_curso }}</span></p>
                    <p class="text-start px-5"><strong class="titulosDatos">Família Profesional: </strong> <span class="colorTexto">{{ $formacion->familia_profesional }}</span></p>
                    <h4 class="mt-5 mb-3 fw-bold">Módulos del Curso:</h4>

                    <table class="table table-bordered fondosDatos elBody table-bordered">
                        <thead>
                            <tr>
                                <th>CÓDMF</th>
                                <th>DENOMINACIÓN MÓDULO FORMATIVO</th>
                                <th>Horas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($formacion->modulos  as $modulo)
                                <tr>
                                    <td><span class="colorTexto">{{ $modulo->codigo_modulo }}</span></td>
                                    <td><span class="colorTexto">{{ $modulo->nombre_modulo }}</span></td>
                                    <td><span class="colorTexto">{{ $modulo->horas }}</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>

    @include('partials._footer')
    <script src="{{ asset('js/menu.js') }}?v=1.0.1"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>