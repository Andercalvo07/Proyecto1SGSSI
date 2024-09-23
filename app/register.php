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
        <form id="register_form" action="register.php" method="post">
            <label for="username">Nombre de Usuario:</label>
            <input type="text" id="username" name="username" placeholder="Ejemplo: Juan123" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Mínimo 6 caracteres" required minlength="6" title="La contraseña debe tener al menos 6 caracteres.">

            <label for="mail">Correo Electrónico (Formato Gmail):</label>
            <input type="email" id="mail" name="mail" placeholder="Ejemplo: nombre@gmail.com" required pattern="[a-zA-Z0-9._%+-]+@gmail\.com" title="Por favor, introduce un correo de Gmail válido.">

            <!-- Campos adicionales para DNI, Nombre, Apellidos -->
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" placeholder="Ejemplo: 12345678X" required pattern="[0-9]{8}[A-Za-z]{1}" title="El DNI debe tener 8 números seguidos de una letra.">

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ejemplo: Juan" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" placeholder="Ejemplo: Pérez Gómez" required>

            <button id="register_submit" type="submit">Registrarse</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Página de Coches. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

