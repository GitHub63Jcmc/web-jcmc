
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTFOLIO - jcmc</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}?v=1.0.3">
</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials._header')

    <div class="container-fluid m-auto hero mb-5">
        <div class="hero-inner">
            <div class="hero-text">
                <h1 class="welcome">WELCOME PORTAFOLIO</h1>
                <p class="colorTexto tamano-texto">Mi nombre es <span class="miNombre">Joao Cabral de Matos Carvalho</span>, <span class="miNombre">"jcmc"</span> soy un informático freelance emprendedor y amante de la tecnología.</p>
                <p class="colorTexto tamano-texto">Desde 2010, he trabajado en grandes empresas del sector como  <span class="miNombre">jcmc</span>. Ocupando mis 3 últimos años, antes de establecerme como freelance, como Arquitecto de Software del área de Logística-Comercial de <span class="miNombre">jcmc</span>.</p>
                <p class="colorTexto tamano-texto">En 2014 decido crear mi propia empresa de desarrollo de software, <span class="miNombre">jcmc</span>, dado mi profundo interés por las nuevas tendencias del sector. Finalmente, en 2015, dejo mi empleo y paso a dedicarme por completo a <span class="miNombre">jcmc</span>, orientando mi carrera al desarrollo de aplicaciones móviles.</p>
                <p class="colorTexto tamano-texto">Actualmente dirijo <span class="miNombre">jcmc</span>, soy co-fundador de <span class="miNombre">JCMC</span> y asesoro y desarrollo para empresas y startups de diferentes partes del mundo.</p>
                <p class="colorTexto tamano-texto">Si estás buscando profesionalidad y dedicación, ¡cuenta conmigo!</p>
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
        <h2 class="text-center mb-4 titulosDatos">Mis Proyectos</h2>
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
        </div>
    </div>

    @include('partials._footer')
    <script src="{{ asset('js/menu.js') }}?v=1.0.1"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
