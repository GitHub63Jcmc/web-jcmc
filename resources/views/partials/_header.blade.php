
<!-- resources/views/parciales/_header.blade.php -->


<header class="header">
    <div class="logo height:100">
        <a href="{{ url('/') }}"><img src="{{ asset('img/LogoJcmcN1.png') }}" alt="Mi Logo"></a>
    </div>
    <button class="hamburger" aria-label="Abrir menú" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <nav class="menu">
        <ul>
            <li><a href="{{ url('/') }}" class="active fw-bold text-secondary text-decoration-none bg-black px-1 py-1 rounded-2" aria-current="page">Inicio</a></li>
            <li><a href="{{ url('/quiensoy') }}" class="fw-bold text-secondary text-decoration-none bg-black px-1 py-1 rounded-2">Quien Soy</a></li>
            <li><a href="{{ url('/blog') }}" class="fw-bold text-secondary text-decoration-none bg-black px-1 py-1 rounded-2">Blog</a></li>
            <li><a href="{{ url('/formacion') }}" class="fw-bold text-secondary text-decoration-none bg-black px-1 py-1 rounded-2">Formación</a></li>
            <li><a href="{{ url('/contacto') }}" class="fw-bold text-secondary text-decoration-none bg-black px-1 py-1 rounded-2">Contacto</a></li>
            <li><a href="{{ url('/portafolio') }}" class="fw-bold text-secondary text-decoration-none bg-black px-1 py-1 rounded-2">Portfolio</a></li>
            @if (Route::has('login'))
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/dashboard') }}">Panel Control</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="{{ route('login') }}">
                            <i class="bi bi-person-lock"></i> Admin
                        </a>
                    </li>
                @endauth
            @endif
        </ul>
        <button class="close-menu" aria-label="Cerrar menú">X</button>
    </nav>
</header>


