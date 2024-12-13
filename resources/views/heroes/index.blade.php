<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Heroes</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
</head>
<body>
    <header>
        <h1>Lista de Heroes</h1>
    </header>
    <main>
        <a href="{{ route('heroes.create') }}" class="btn">Crear Nuevo Heroe</a>
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
            @foreach ($heroes as $heroe)
                <tr>
                    <td>{{ $heroe->id }}</td>
                    <td>{{ $heroe->nombre }}</td>
                    <td>{{ $heroe->apodo }}</td>
                    <td>{{ $heroe->rol }}</td>
                    <td>{{ $heroe->elemento }}</td>
                    <td>{{ $heroe->arma }}</td>
                    <td>{{ $heroe->edad }}</td>
                    <td>{{ $heroe->especie }}</td>
                    <td>
    
                        <form action="{{ route('heroes.edit', $heroe) }}" style="display:inline;">
                            @csrf
                            
                            <button type="submit">Editar</button>
                        </form>
                        
                        <form action="{{ route('heroes.destroy', $heroe) }}" method="POST" style="display:inline;">
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