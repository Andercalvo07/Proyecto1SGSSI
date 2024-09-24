<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #444;
            padding: 20px;
            background-color: #fff;
            margin: 0;
            border-bottom: 2px solid #ddd;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #218838;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            border-top: 2px solid #ddd;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
            color: #777;
        }
    </style>
</head>
<body>
    <h1>Registro</h1>

    <div class="container">
	<form id="register_form" action="register.php" method="post" onsubmit="return comprobarFormato();">
            <label for="username">Nombre de Usuario:</label>
            <input type="text" id="username" name="username" placeholder="Ejemplo: Juan123" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Mínimo 6 caracteres" required>

            <label for="mail">Correo Electrónico:</label>
            <input type="email" id="mail" name="mail" placeholder="Ejemplo: nombre@servidor.com" required>

            <!-- Campo para Nombre y Apellidos combinados -->
            <label for="nombre_apellidos">Nombre y Apellidos:</label>
            <input type="text" id="nombre_apellidos" name="nombre_apellidos" placeholder="Ejemplo: Juan Pérez Gómez" required>

            <!-- Campo para DNI -->
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" placeholder="Ejemplo: 12345678Z" required>

            <!-- Campo para Teléfono -->
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" placeholder="Ejemplo: 600123456" required>

            <!-- Campo para Fecha de Nacimiento -->
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

            <button id="register_submit" type="submit">Registrarse</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Página de Coches. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

