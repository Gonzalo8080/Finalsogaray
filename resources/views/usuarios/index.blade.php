<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
</head>
<body>
    <header>
        <h1>Lista de Usuarios</h1>
    </header>
    <main>
        <a href="{{ route('usuarios.create') }}" class="btn">Crear Nuevo Usuario</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>
                        <form action="{{ route('usuarios.edit', $usuario) }}" style="display:inline;">
                            @csrf
                            
                            <button type="submit">Editar</button>
                        </form>
                        <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/') }}" class="btn">Volver a la Página Principal</a>
    </main>
    <footer>
        <p>Final Produccion Web - Gonzalo Alsogaray &copy; </p>
    </footer>
    
</body>
</html>