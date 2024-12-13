<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Final Produccion Web</h1>
        <p>Gonzalo Alsogaray</p>
        
        <a href="{{ route('usuarios.index') }}" class="btn">Ver Usuarios</a>
        <a href="{{ route('heroes.index') }}" class="btn">Ver Heroes</a>
    </header>
</body>
</html>