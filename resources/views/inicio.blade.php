
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | JCMC</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}?v=1.0.4">
</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials._header')

    <div class="container-fluid m-auto hero">
        <div class="hero-inner">
            <div class="hero-text">
                <h1 class="welcome">WELCOME SITE jcmc</h1>
                <h6 class="colorTexto">Desarrollador Web en formación con 3 años de experiencia, práctica en el desarrollo de sitios web y aplicaciones a través de proyectos personales y cursos especializados. Habilidad en tecnologías como HTML5, CSS3, JavaScript, y PHP, con conocimientos en WordPress, bases de datos (MySQL) y el uso de frameworks modernos como Bootstrap. Motivado para seguir aprendiendo y aplicando nuevas tecnologías, y con experiencia previa en la gestión de proyectos y atención al detalle, adquirida durante una extensa carrera en estos últimos años.</h6>
            </div>
            <div class="hero-image m-1">
                <picture>
                    <source srcset="{{ asset('img/hero_setup.avif') }}" type="image/avif">
                    <source srcset="{{ asset('img/hero_setup.webp') }}" type="image/webp">
                    <img src="{{ asset('img/hero_setup.jpg') }}" alt="Imagen Inicio">
                </picture>
            </div>
        </div>
    </div>

    {{-- BLOQUE DE ÚLTIMOS POSTS --}}
    <section class="container -5rem!importan">
        <h2 class="text-white text-center mb-4">Últimas publicaciones del Blog</h2>
        
        <div class="row justify-content-center">
            @forelse($ultimosPosts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 bg-dark text-white border-secondary shadow-sm">
                        @if($post->imagen)
                            <img src="{{ asset('img/' . $post->imagen) }}" class="card-img-top" alt="{{ $post->titulo }}" style="height: 200px; object-fit: cover;">
                        @else
                            <img src="{{ asset('img/default.jpg') }}" class="card-img-top" alt="Imagen por defecto">
                        @endif
                        
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-info">{{ $post->titulo }}</h5>
                            <p class="card-text text-secondary small">
                                {{ Str::limit(strip_tags($post->contenido), 120) }}
                            </p>
                            
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <a href="{{ route('blog') }}?buscar={{ $post->titulo }}" class="btn btn-outline-info btn-sm">Leer más</a>
                                <span class="badge rounded-pill bg-secondary">
                                    💬 {{ $post->comentarios->count() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted">
                    <p>Próximamente habrá nuevas publicaciones. ¡Vuelve pronto! 😊</p>
                </div>
            @endforelse
        </div>
    </section>

    @include('partials._footer')
    <script src="{{ asset('js/menu.js') }}?v=1.0.1"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>