<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Edad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">


   
</head>
<body>

<div class="edad-card">
    <h1>Calculadora de Edad</h1>

    {{-- Mostrar errores de validación --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulario --}}
    <form method="POST" action="{{ route('calcular.edad') }}">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Tu nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa tu nombre" value="{{ old('nombre') }}">
        </div>

        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento') }}">
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Calcular edad</button>
        </div>
    </form>

    {{-- Mostrar resultado --}}
    @isset($edad)
        <div class="alert alert-success mt-4 text-center">
            ¡Hola <strong>{{ $nombre }}</strong>! Tienes <strong>{{ $edad }} años</strong>.
        </div>
    @endisset
</div>

</body>
</html>
