<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Avatares</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
</head>
<body>
    <header>
        <h1>Lista de Personajes</h1>
    </header>
    <main>
        <a href="{{ route('avatares.create') }}" class="btn">Crear Nuevo Personaje</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apodo</th>
                <th>Rol</th>
                <th>Elemento</th>
                <th>Arma</th>
                <th>Edad</th>
                <th>Especie</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($avatares as $avatar)
                <tr>
                    <td>{{ $avatar->id }}</td>
                    <td>{{ $avatar->nombre }}</td>
                    <td>{{ $avatar->apodo }}</td>
                    <td>{{ $avatar->rol }}</td>
                    <td>{{ $avatar->elemento }}</td>
                    <td>{{ $avatar->arma }}</td>
                    <td>{{ $avatar->edad }}</td>
                    <td>{{ $avatar->especie }}</td>
                    <td>
                        <a href="{{ route('avatares.edit', $avatar) }}">Editar</a>
                        <form action="{{ route('avatares.destroy', $avatar) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <a href="{{ url('/') }}" class="btn">Volver a la Página Principal</a>
    </main>
    <footer>
        <p>Final Produccion Web - Gonzalo Alsogaray &copy; </p>
    </footer>
    
    
</body>
</html>
