<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Usuario</title>
</head>
<body>
    <h1>Detalles del Usuario</h1>
    <?php
    include 'db.php';  // Conectar a la base de datos

    $user = $_GET['user'];
    $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombreUsuario='$user'");

    if ($row = mysqli_fetch_assoc($query)) {
        echo "<p>Nombre: {$row['NombreApellidos']}</p>";
        echo "<p>DNI: {$row['DNI']}</p>";
        echo "<p>Teléfono: {$row['telefono']}</p>";
        echo "<p>Fecha de Nacimiento: {$row['fechaNcto']}</p>";
        echo "<p>Email: {$row['email']}</p>";
    } else {
        echo "<p>Usuario no encontrado.</p>";
    }
    ?>
</body>
</html>
