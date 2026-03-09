
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTFOLIO - jcmc</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}?v=1.0.4">
</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials._header')

    <div class="container-fluid m-auto hero mb-1">
        <div class="hero-inner">
            <div class="hero-text">
                <h1 class="welcome text-success">WELCOME PORTFOLIO</h1>
                <p class="colorTexto tamano-texto lead">
                    Soy <strong>Joao (jcmc)</strong>, desarrollador Full Stack especializado en el ecosistema PHP y JavaScript.
                </p>            
                <p class="colorTexto tamano-texto">
                    Mi historia con la tecnología comenzó hace más de <strong>30 años</strong>, cuando el CSS apenas estaba naciendo. Tras un paréntesis de dos décadas, la pandemia fue el motor para retomar mi pasión y profesionalizarme en las tecnologías actuales.
                </p>        
                <p class="colorTexto tamano-texto">
                    Llevo los últimos años creando y desplegando aplicaciones web, formándome de manera constante en las últimas tendencias del mercado (SEPE, Udemy). Creo firmemente en el <strong>aprendizaje continuo</strong> y en la atención al detalle.
                </p>
                <p class="colorTexto tamano-texto fw-bold">
                    Si buscas profesionalidad y una mentalidad resiliente, ¡cuenta conmigo!
                </p>
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


    <div class="container-fluid">
        <h2 class="text-center mb-5 welcome">Mis Proyectos</h2>
        <div class="row">
            @forelse ($proyectos as $proyecto)
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm mb-4 mx-2">
                        <div class="card-body colorFondoCard">
                            <h5 class="card-title fs-5 fw-bold">{{ $proyecto->titulo }}</h5>
                            <p class="shadow mt-3 rounded"><img src="{{ asset('img/' . $proyecto->imagen) }}" alt="{{ $proyecto->titulo }}" width="200" class="my-2 rounded"></p>
                            <p class="card-text text-muted tamano-texto text-start">{!! nl2br(e($proyecto->descripcion)) !!}</p>
                            <a href="{{ $proyecto->url }}" target="_blank" class="btn btn-primary w-100">Ver Proyecto</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center text-muted">No hay proyectos disponibles en este momento.</p>
                </div>
            @endforelse

            <div class="container-fluid">
                <div class="d-flex justify-content-center mt-5 mb-5 px-2">
                    {{ $proyectos->links() }}
                </div>
            </div>


            {{-- <div class="d-flex justify-content-center mt-5 mb-5">
                {{ $proyectos->links() }}
            </div> --}}
        </div>
    </div>

    @include('partials._footer')
    <script src="{{ asset('js/menu.js') }}?v=1.0.1"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
