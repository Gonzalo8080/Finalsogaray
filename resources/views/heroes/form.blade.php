<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Heroe</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
</head>
<body>
    <header>
        <h1>Crear Heroe</h1>
    </header>
    <main>
        <form action={{ route('heroes.store') }} method="POST">
            @csrf
            @if ($heroe->exists)
                @method('PUT')
            @endif
            <div>
                <label>Nombre:</label>
                <input type="text" name="nombre" value="{{ old('nombre', $heroe->nombre) }}" required>
            </div>
            <div>
                <label>Apodo:</label>
                <input type="text" name="apodo" value="{{ old('apodo', $heroe->apodo) }}" required>
            </div>
            <div>
                <label>Rol:</label>
                <select name="rol" required>
                    @foreach (['guerrero', 'distancia', 'tanque', 'sanador'] as $rol)
                        <option value="{{ $rol }}" {{ old('rol', $heroe->rol) === $rol ? 'selected' : '' }}>{{ ucfirst($rol) }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Elemento:</label>
                <select name="elemento" required>
                    @foreach (['fuego', 'tierra', 'agua', 'basico', 'luz', 'oscuridad'] as $elemento)
                        <option value="{{ $elemento }}" {{ old('elemento', $heroe->elemento) === $elemento ? 'selected' : '' }}>{{ ucfirst($elemento) }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Arma:</label>
                <select name="arma" required>
                    @foreach (['espada y escudo', 'espada de 2 manos', 'pistola', 'arco', 'báculo', 'guante', 'garra', 'cesta'] as $arma)
                        <option value="{{ $arma }}" {{ old('arma', $heroe->arma) === $arma ? 'selected' : '' }}>{{ ucfirst($arma) }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Edad:</label>
                <input type="number" name="edad" value="{{ old('edad', $heroe->edad) }}" required>
            </div>
            <div>
                <label>Especie:</label>
                <input type="text" name="especie" value="{{ old('especie', $heroe->especie) }}" required>
            </div>
            <button type="submit" class="btn">Crear</button>
        </form>
    </main>
    <footer>
    </footer>
</body>
</html>