<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje de contacto</title>
    <style>
        body { font-family: Arial, sans-serif; color: #333; }
        h2 { color: #0d6efd; }
    </style>
</head>
<body>

<h2>Nuevo mensaje desde tu web</h2>
<p><strong>Nombre:</strong> {{ $nombre }}</p>
<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Mensaje:</strong></p>
<p>{{ $mensaje }}</p>

</body>
</html>