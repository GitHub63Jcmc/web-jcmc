
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
                {{-- <h6 class="colorTexto">Desarrollador Web en formación con 3 años de experiencia, práctica en el desarrollo de sitios web y aplicaciones a través de proyectos personales y cursos especializados. Habilidad en tecnologías como HTML5, CSS3, JavaScript, y PHP, con conocimientos en WordPress, bases de datos (MySQL) y el uso de frameworks modernos como Bootstrap. Motivado para seguir aprendiendo y aplicando nuevas tecnologías, y con experiencia previa en la gestión de proyectos y atención al detalle, adquirida durante una extensa carrera en estos últimos años. --}}
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

{{-- -----------------El Buscador--------- --}}
    <div class="container mb-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('blog') }}" method="GET" class="d-flex">
                    <input type="text" name="buscar" class="form-control bg-secondary-subtle border-dark" 
                           placeholder="Buscar en el blog..." 
                           value="{{ $query ?? '' }}">
                    <button type="submit" class="btn btn-dark ms-2">🔍</button>
                    
                    @if($query)
                        <a href="{{ route('blog') }}" class="btn btn-outline-danger ms-2">Limpiar</a>
                    @endif
                </form>

                {{-- Prueba esto para asegurar que detecte la búsqueda --}}
                @if(request()->filled('buscar'))
                    <p class="text-center mt-3 text-muted border-top pt-2" style="color: whitesmoke!important">
                        🔍 Se han encontrado <strong>{{ $posts->total() }}</strong> 
                        {{ $posts->total() == 1 ? 'resultado' : 'resultados' }} 
                        para: <span class="badge bg-warning text-dark px-3">"{{ request('buscar') }}"</span>
                    </p>
                @endif
            </div>
        </div>
    </div>


    <div class="container my-5">
        {{-- 1. Empezamos el ciclo --}}
        @forelse ($posts as $post)
            <div class="row mb-5">
                <div class="col-md-8 offset-md-2 p-3 fondosDatos">
                    @if(session('success'))
                        <div class="alert alert-success mt-2 small">
                            {{ session('success') }}
                        </div>
                    @endif

                    <article class="card mb-4 shadow-sm bg-secondary">
                        @if($post->imagen)
                            <img src="{{ asset('img/' . $post->imagen) }}" class="card-img-top img-fluid" style="max-height: 600px; width: auto; display: block; margin: 10px auto; border: solid 2px black" alt="{{ $post->titulo }}">
                        @endif

                        <div class="card-body">
                            <h2 class="card-title h3">{{ $post->titulo }}</h2>

                            {{-- PEQUEÑO BADGE DE COMENTARIOS --}}
                            <div class="mb-3">
                                <a href="#comentarios-{{ $post->id }}" class="text-decoration-none">
                                    <span class="badge rounded-pill bg-info text-dark shadow-sm" style="font-size: 0.85rem;">
                                        💬 {{ $post->comentarios->count() }} 
                                        {{ $post->comentarios->count() == 1 ? 'comentario' : 'comentarios' }}
                                    </span>
                                </a>
                            </div>
                        
                            {{-- BOTONES DE ADMINISTRACIÓN --}}
                            @auth
                                <div class="mb-3 p-2 rounded d-flex gap-2 justify-content-center mx-auto" style="background-color: #5E5B5B; width: fit-content;">
                                    <a href="{{ route('admin.post.editar', $post->id) }}" class="btn btn-sm btn-outline-warning">
                                        Editar ✏️
                                    </a>
                                
                                    <form action="{{ route('admin.post.eliminar', $post->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Seguro que quieres borrar este post y su imagen?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <span class="text-black">Borrar 🗑️</span>
                                        </button>
                                    </form>
                                </div>
                            @endauth

                            <p class="text-muted small">Publicado por {{ $post->autor }} el {{ $post->created_at->format('d/m/Y') }}</p>
                            
                            <div class="card-text bg-secondary-subtle text-slate-900 p-3 rounded text-start">
                                {!! nl2br(e($post->contenido)) !!} 
                            </div>

                            <hr>

                            <h5 id="comentarios-{{ $post->id }}" class="mt-4">Comentarios ({{ $post->comentarios->count() }})</h5>
                            <ul class="list-group list-group-flush mb-4">
                                @forelse ($post->comentarios as $comentario)
                                    <li class="list-group-item bg-light d-flex justify-content-between align-items-center rounded-2 mt-1 mb-1">
                                        <div>
                                            <strong>{{ $comentario->autor }}:</strong> 
                                            {{ $comentario->contenido }}
                                        
                                            {{-- Botón Editar comentario --}}
                                            <a href="{{ route('admin.comentario.editar', $comentario->id) }}" class="text-warning p-0 " title="Editar comentario">
                                                ✏️
                                            </a>
                                        </div>
                                    
                                        {{-- BOTÓN ELIMINAR COMENTARIO (Solo para ti) --}}
                                        @auth
                                            <form action="{{ route('admin.comentario.eliminar', $comentario->id) }}" method="POST" onsubmit="return confirm('¿Borrar este comentario?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm text-danger p-0" title="Eliminar comentario">
                                                    🗑️
                                                </button>
                                            </form>
                                        @endauth
                                    </li>
                                @empty
                                    {{-- Mensaje que se muestra si la lista está vacía --}}
                                    <li class="list-group-item bg-light text-muted rounded-2 mt-1 shadow-sm border-0 italic">
                                        <i class="bi bi-chat-dots"></i> Aún no hay comentarios. ¡Sé el primero en opinar! 😊
                                    </li>
                                @endforelse
                            </ul>

                            {{-- FORMULARIO DE COMENTARIOS --}}
                            <div class="card-footer bg-dark text-light pt-3 rounded-2">
                                <h6>Deja un comentario:</h6>
                                <form action="{{ route('comentario.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <div class="mb-2">
                                        <input type="text" name="autor" class="form-control form-control-sm bg-secondary-subtle" placeholder="Tu nombre" required>
                                    </div>
                                    <div class="mb-2">
                                        <textarea name="contenido" class="form-control form-control-sm bg-secondary-subtle" rows="2" placeholder="Escribe aquí tu comentario..." required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-sm mb-2 bg-dark border-white">Enviar comentario</button>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

        {{-- 2. EL BLOQUE MÁGICO: ¿Qué pasa si no hay resultados? --}}
        @empty
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="alert alert-info text-center shadow-sm">
                        No se encontraron posts que coincidan con "<strong>{{ $query }}</strong>".
                    </div>
                </div>
            </div>
        @endforelse {{-- 3. Cerramos el ciclo principal --}}
    </div>


    <div class="d-flex justify-content-center mt-4">
        {{-- {{ $posts->links() }} --}}
        {{ $posts->appends(['buscar' => $query])->links() }}
    </div>    

    @include('partials._footer')
    <script src="{{ asset('js/menu.js') }}?v=1.0.1"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>