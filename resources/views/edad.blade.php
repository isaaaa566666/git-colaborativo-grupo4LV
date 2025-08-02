<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Edad</title>
</head>
<body>
    <h1>Calculadora de Edad</h1>

    <label for="fecha">Ingresa tu fecha de nacimiento:</label>
    <input type="date" id="fecha" name="fecha">
    <button onclick="calcularEdad()">Calcular Edad</button>

    <p id="resultado"></p>

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
