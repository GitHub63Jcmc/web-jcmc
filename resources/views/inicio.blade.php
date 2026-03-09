
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | JCMC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}?v=1.0.4">
</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials._header')

    <div class="container my-4 py-4 text-white">
        <div class="row align-items-start g-5">
            <div class="col-lg-7">
                <h1 class="display-4 fw-bold text-success mb-2 welcome">WELCOME SITE jcmc</h1>
                <h2 class="h1 fw-bold text-success mb-4 welcome">BIO & CONTACTO</h2>

                <p class="lead mb-4 text-secondary text-start">
                    Desarrollador Full Stack con más de <strong>3 años de experiencia</strong> en Laravel, React y MySQL, en sitios web y aplicaciones a través de proyectos personales y cursos especializados. Habilidad en tecnologías como HTML5, CSS3, JavaScript y PHP, con conocimientos en WordPress, bases de datos (MySQL) y el uso de frameworks modernos como Bootstrap. Motivado para seguir aprendiendo y aplicando nuevas tecnologías, y con experiencia previa en la gestión de proyectos y atención al detalle, adquirida durante una extensa carrera en estos últimos años.
                </p>

                <div class="d-flex flex-wrap gap-3 fs-2 mt-4 text-center justify-content-center">
                    <i class="devicon-html5-plain-wordmark colored" title="HTML5"></i>
                    <i class="devicon-css3-plain-wordmark colored" title="CSS3"></i>
                    <i class="devicon-javascript-plain colored" title="JavaScript"></i>
                    <i class="devicon-php-plain colored" title="PHP"></i>
                    <i class="devicon-laravel-original colored" title="Laravel"></i>
                    <i class="devicon-react-original colored" title="React"></i>
                    <i class="devicon-mysql-plain-wordmark colored" title="MySQL"></i>
                    <i class="devicon-bootstrap-plain colored" title="Bootstrap"></i>
                    <i class="devicon-tailwindcss-original colored" title="Tailwind CSS"></i>
                    <i class="devicon-android-plain colored" title="Android"></i>
                    <i class="devicon-wordpress-plain colored" title="WordPress"></i>
                    <i class="devicon-angular-plain colored" title="Angular"></i>
                    <i class="devicon-vuejs-plain colored" title="Vue.js"></i>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <div class="card bg-dark border-secondary overflow-hidden shadow-lg rounded-4 position-relative">
                            <img src="{{ asset('img/PapaGafas.jpg') }}" class="card-img-top img-fluid" alt="Joao Cabral" style="object-fit: cover; aspect-ratio: 1/1;">
                            <div class="position-absolute top-0 end-0 m-2">
                                <span class="badge bg-success shadow-sm" style="font-size: 0.7rem;">Available for Hire</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card bg-dark text-white border-secondary shadow-lg rounded-3">
                            <div class="card-body p-3">
                                <h6 class="card-title border-bottom border-secondary pb-2 mb-3 text-white" style="font-size: 0.9rem;">Contact Profile Card</h6>
                                <ul class="list-unstyled mb-0" style="font-size: 0.85rem;">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="devicon-linkedin-plain text-info me-2 fs-5"></i> LinkedIn
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="devicon-github-original text-white me-2 fs-5"></i> GitHub
                                    </li>
                                    <li class="mb-2 d-flex align-items-center text-secondary">
                                        <span class="me-2">✉️</span> jcmcgoojcmc@gmail.com
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-outline-light btn-sm w-100 mt-3" style="font-size: 0.8rem;">
                                    📥 Download CV
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-image m-1">
                        <picture>
                            <source srcset="{{ asset('img/hero_setup.avif') }}" type="image/avif">
                            <source srcset="{{ asset('img/hero_setup.webp') }}" type="image/webp">
                            <img src="{{ asset('img/hero_setup.jpg') }}" style="max-width: 50%; height: auto;" alt="Imagen Inicio">
                        </picture>
                    </div>
                </div> 
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
                            <img src="{{ asset('img/' . $post->imagen) }}" class="card-img-top" alt="{{ $post->titulo }}" style="height: 300px; object-fit: cover;">
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
                                <span class="badge rounded-pill bg-secondary fs-6 text-dark ">
                                    💬{{ $post->comentarios->count() }}
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