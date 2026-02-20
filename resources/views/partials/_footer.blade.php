<!-- resources/views/parciales/_footer.blade.php -->


{{-- ------------------------------------------------------------------------------------ --}}
<footer class="text-white mt-auto py-3 elBody">
    <div class="footer-container">
        <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('img/LogoJcmcN1.png') }}" alt="Logo" height="50"></a>
        </div>

        <div class="social-icons d-flex gap-3">
            <a href="#"><img src="{{ asset('img/instagram.png') }}" width="30"></a>
            <a href="#"><img src="{{ asset('img/facebook.png') }}" width="30"></a>
						<a href="#"><img src="{{ asset('img/instagram.png') }}" width="30"></a>
            <a href="#"><img src="{{ asset('img/facebook.png') }}" width="30"></a>
        </div>

        <nav class="footer-nav">
            <ul class="d-flex gap-3 list-unstyled mb-0">
                <li><a href="{{ url('/') }}" class="text-secondary text-decoration-none">Inicio</a></li>
                <li><a href="{{ url('/quiensoy') }}" class="text-secondary text-decoration-none">Quien soy</a></li>
                <li><a href="{{ url('/blog') }}" class="text-secondary text-decoration-none">Blog</a></li>
                <li><a href="{{ url('/formacion') }}" class="text-secondary text-decoration-none">Formación</a></li>
                <li><a href="{{ url('/contacto') }}" class="text-secondary text-decoration-none">Contacto</a></li>
                <li><a href="{{ url('/portafolio') }}" class="text-secondary text-decoration-none">Portfolio</a></li>
            </ul>
        </nav>
    </div>
    <p class="text-center mt-3 text-black">© Joao - JCMC 2025</p>
</footer>

{{-- ----------------------------------------------------------------------------------------- --}}

{{-- <footer class="text-white mt-auto py-3 elBody">
	<header class="header">
	    <div class="logo height:100">
	        <a href="{{ url('/') }}"><img src="{{ asset('img/LogoJcmcN1.png') }}" alt="Mi Logo"></a>
	    </div>

		<!-- Redes Sociales -->
        <div class="social-icons d-flex gap-5">
            <a href="https://www.instagram.com/" target="_blank">
                <img src="{{ asset('img/instagram.png') }}" alt="Instagram" width="30">
            </a>
            <a href="https://www.facebook.com/" target="_blank">
                <img src="{{ asset('img/facebook.png') }}" alt="Facebook" width="30">
            </a>
            <a href="https://www.linkedin.com/" target="_blank">
                <img src="{{ asset('img/instagram.png') }}" alt="LinkedIn" width="30">
            </a>
            <a href="https://www.youtube.com/" target="_blank">
                <img src="{{ asset('img/facebook.png') }}" alt="YouTube" width="30">
            </a>
        </div>

	    <nav class="menu">
	        <ul>
	            <li><a href="{{ url('/') }}" class="active fw-bold text-secondary text-decoration-none bg-black aria-current="page">Inicio</a></li>
	            <li><a href="{{ url('/quiensoy') }}" class="fw-bold text-secondary text-decoration-none bg-black">Quien Soy</a></li>
	            <li><a href="{{ url('/formacion') }}" class="fw-bold text-secondary text-decoration-none bg-black">Formación</a></li>
	            <li><a href="{{ url('/blog') }}" class="fw-bold text-secondary text-decoration-none bg-black">Blog</a></li>
	            <li><a href="{{ url('/contacto') }}" class="fw-bold text-secondary text-decoration-none bg-black">Contacto</a></li>
	            <li><a href="{{ url('/portafolio') }}" class="fw-bold text-secondary text-decoration-none bg-black">Portafolio</a></li>
	        </ul>
	    </nav>
	</header>
</footer>
<footer class="mt-auto py-1 fw-bold elBody">
	<p class="text-black">© Joao - JCMC 2025 - Frontend/Backend Developer</p>
</footer> --}}
