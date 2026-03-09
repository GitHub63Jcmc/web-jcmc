
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIEN SOY - Mi primer Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}?v=1.0.4">
</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials._header')

    <div class="container-fluid m-auto hero">
        <div class="hero-inner">
            <div class="container my-5 py-5 text-white">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="display-4 fw-bold mb-4 welcome" style="font-size: 80px!important">Joao Cabral</h1>
                        <h3 class="text-info mb-4">Desarrollador Full Stack</h3>

                        <p class="lead text-start">
                            Transformo ideas en soluciones digitales robustas. Con más de <strong>3 años de experiencia</strong>, he evolucionado desde el diseño de interfaces con React hasta la arquitectura de sistemas complejos con Laravel.
                        </p>

                        <div class="my-4 text-start">
                            <p><i class="bi bi-check2-circle text-info"></i> <strong>Código Limpio:</strong> Desarrollo pensando en la escalabilidad y el mantenimiento.</p>
                            <p><i class="bi bi-check2-circle text-info"></i> <strong>Full Stack:</strong> Dominio del ciclo completo, desde el Frontend dinámico hasta bases de datos optimizadas.</p>
                            <p><i class="bi bi-check2-circle text-info"></i> <strong>Resolución de Problemas:</strong> Enfoque en la eficiencia y la seguridad del código.</p>
                        </div>
                    
                        <a href="{{ route('contacto') }}" class="btn btn-info btn-lg mt-3">Hablemos de tu proyecto</a>
                    </div>

                    <div class="col-md-6 text-center mt-5 mt-md-0">
                         <img src="{{ asset('img/PapaGafas.jpg') }}" class="img-fluid rounded-circle shadow-lg border border-info" style="max-width: 300px;" alt="Joao Cabral">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials._footer')
    <script src="{{ asset('js/menu.js') }}?v=1.0.1"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
