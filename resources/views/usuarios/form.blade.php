<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
</head>
<body>
    <header>
        <h1>Crear Usuario</h1>
    </header>
    <main>
        <form action={{route('usuarios.store') }} method="POST">
            @csrf
            @if ($usuario->exists)
                @method('PUT')
            @endif
            <div>
                <label>Nombre:</label>
                <input type="text" name="nombre" value="{{ old('nombre', $usuario->nombre) }}" required>
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email', $usuario->email) }}" required>
            </div>
            <div>
                <label>Contraseña:</label>
                <input type="password" name="password" {{ !$usuario->exists ? 'required' : '' }}>
            </div>
            <button type="submit" class="btn">Crear</button>
        </form>
    </main>
    <footer>
        <p>Final Produccion Web - Gonzalo Alsogaray &copy; </p>
    </footer>
    
</body>
</html>