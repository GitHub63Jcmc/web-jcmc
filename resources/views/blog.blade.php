
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}?v=1.0.4">
</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials._header')

    <div class="container-fluid m-auto hero">
        <div class="hero-inner">
            <div class="hero-text">
                <h1 class="welcome">WELCOME MY BLOG</h1>
                <h6 class="colorTexto">Desarrollador Web en formación con 3 años de experiencia, práctica en el desarrollo de sitios web y aplicaciones a través de proyectos personales y cursos especializados. Habilidad en tecnologías como HTML5, CSS3, JavaScript, y PHP, con conocimientos en WordPress, bases de datos (MySQL) y el uso de frameworks modernos como Bootstrap. Motivado para seguir aprendiendo y aplicando nuevas tecnologías, y con experiencia previa en la gestión de proyectos y atención al detalle, adquirida durante una extensa carrera en estos últimos años.
                </h6>
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

    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @foreach ($posts as $post)
                    <article class="card mb-4 shadow-sm">
                        @if($post->imagen)
                            <img src="{{ asset('img/' . $post->imagen) }}" class="card-img-top" style="height: 360px; width: 60%; margin: 5px auto; border: solid 2px black" alt="{{ $post->titulo }}">
                        @endif
                        
                        <div class="card-body">
                            <h2 class="card-title h3">{{ $post->titulo }}</h2>
                            <p class="text-muted small">Publicado por {{ $post->autor }} el {{ $post->created_at->format('d/m/Y') }}</p>
                            
                            <div class="card-text colorTexto">
                                {{ Str::limit($post->contenido, 200) }} </div>

                            <hr>
                            
                            <h5 class="mt-4">Comentarios ({{ $post->comentarios->count() }})</h5>
                            <ul class="list-group list-group-flush">
                                @forelse ($post->comentarios as $comentario)
                                    <li class="list-group-item bg-light">
                                        <strong>{{ $comentario->autor }}:</strong> 
                                        {{ $comentario->contenido }}
                                    </li>
                                @empty
                                    <li class="list-group-item text-muted">Aún no hay comentarios. ¡Sé el primero!</li>
                                @endforelse
                            </ul>
                        </div>
                    </article>
                @endforeach

                <div class="d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>

    @include('partials._footer')
    <script src="{{ asset('js/menu.js') }}?v=1.0.1"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>