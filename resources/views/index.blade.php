<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Edad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #000000; /* Fondo negro */
            font-family: Arial, Helvetica, sans-serif; /* Fuente profesional */
        }

        .edad-card {
            max-width: 500px;
            margin: 80px auto;
            padding: 30px;
            border-radius: 0; /* Sin bordes redondeados */
            box-shadow: 0 8px 20px rgba(255, 255, 255, 0.1); /* sombra sutil blanca para contraste */
            background-color: #1a1a1a; /* Fondo oscuro para la tarjeta */
            color: #ffffff; /* Texto blanco */
        }

        h1 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 25px;
            color: #4dabf7; /* azul claro para buen contraste */
        }

        .btn-primary {
            background-color: #4dabf7; /* botón azul claro */
            border: none;
            color: #000000; /* texto negro en botón para contraste */
        }

        .btn-primary:hover {
            background-color: #228be6; /* azul más oscuro en hover */
        }

        label {
            color: #ffffff; /* etiquetas blancas */
        }

        input.form-control {
            background-color: #333333; /* fondo oscuro para inputs */
            color: #ffffff; /* texto blanco en inputs */
            border-radius: 0; /* sin bordes redondeados */
            border: 1px solid #4dabf7; /* borde azul claro */
        }

        input.form-control::placeholder {
            color: #bbbbbb;
        }
    </style>
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
