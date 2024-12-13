<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $avatar->exists ? 'Editar Personaje' : 'Crear Personaje' }}</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
</head>
<body>
    <header>
        <h1>{{ $avatar->exists ? 'Editar Personaje' : 'Crear Personaje' }}</h1>
    </header>
    <main>
        <form action="{{ $avatar->exists ? route('avatares.update', $avatar) : route('avatares.store') }}" method="POST">
            @csrf
            @if ($avatar->exists)
                @method('PUT')
            @endif
            <div>
                <label>Nombre:</label>
                <input type="text" name="nombre" value="{{ old('nombre', $avatar->nombre) }}" required>
            </div>
            <div>
                <label>Apodo:</label>
                <input type="text" name="apodo" value="{{ old('apodo', $avatar->apodo) }}" required>
            </div>
            <div>
                <label>Rol:</label>
                <select name="rol" required>
                    @foreach (['guerrero', 'distancia', 'tanque', 'sanador'] as $rol)
                        <option value="{{ $rol }}" {{ old('rol', $avatar->rol) === $rol ? 'selected' : '' }}>{{ ucfirst($rol) }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Elemento:</label>
                <select name="elemento" required>
                    @foreach (['fuego', 'tierra', 'agua', 'basico', 'luz', 'oscuridad'] as $elemento)
                        <option value="{{ $elemento }}" {{ old('elemento', $avatar->elemento) === $elemento ? 'selected' : '' }}>{{ ucfirst($elemento) }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Arma:</label>
                <select name="arma" required>
                    @foreach (['espada y escudo', 'espada de 2 manos', 'pistola', 'arco', 'báculo', 'guante', 'garra', 'cesta'] as $arma)
                        <option value="{{ $arma }}" {{ old('arma', $avatar->arma) === $arma ? 'selected' : '' }}>{{ ucfirst($arma) }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Edad:</label>
                <input type="number" name="edad" value="{{ old('edad', $avatar->edad) }}" required>
            </div>
            <div>
                <label>Especie:</label>
                <input type="text" name="especie" value="{{ old('especie', $avatar->especie) }}" required>
            </div>
            <button type="submit">{{ $avatar->exists ? 'Actualizar' : 'Crear' }}</button>
        </form>
    </main>
    <footer>
        <p>Final Produccion Web - Gonzalo Alsogaray &copy; </p>
    </footer>
    
</body>
</html>