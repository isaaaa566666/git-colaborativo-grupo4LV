<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Edad</title>
    <style>
        body {
            background: #f0f4f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 90%;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="date"] {
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        #resultado {
            margin-top: 20px;
            font-size: 1.2rem;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Calculadora de Edad</h1>
        <label for="fecha">Ingresa tu fecha de nacimiento:</label>
        <input type="date" id="fecha" name="fecha">
        <button onclick="calcularEdad()">Calcular Edad</button>
        <p id="resultado"></p>
    </div>

    <script>
        function calcularEdad() {
            const fechaNacimiento = new Date(document.getElementById('fecha').value);
            const hoy = new Date();

            if (isNaN(fechaNacimiento)) {
                document.getElementById('resultado').innerText = "Por favor, ingresa una fecha válida.";
                return;
            }

            let edad = hoy.getFullYear() - fechaNacimiento.getFullYear();
            const mes = hoy.getMonth() - fechaNacimiento.getMonth();

            if (mes < 0 || (mes === 0 && hoy.getDate() < fechaNacimiento.getDate())) {
                edad--;
            }

            document.getElementById('resultado').innerText = `Tienes ${edad} años.`;
        }
    </script>
</body>
</html>

<?php /**PATH C:\Users\USUARIO\git-colaborativo-grupo4LV\resources\views/edad.blade.php ENDPATH**/ ?>