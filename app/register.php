<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
    <form id="register_form">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>
        <label for="mail">Gmail con formato... (FALTAN DNI, NOMBRE APELLIDOS...):</label>
        <input type="text" id="mail" name="mail" required><br>
        <button id="register_submit" type="button" onclick="comprobarFormato()">Registrarse</button>
    </form>
    <script src="comprobaciones.js"></script>
</body>
</html>
