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
    $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE username='$user'");

    if ($row = mysqli_fetch_assoc($query)) {
        echo "<p>Nombre: {$row['nombre_apellidos']}</p>";
        echo "<p>DNI: {$row['dni']}</p>";
        echo "<p>Teléfono: {$row['telefono']}</p>";
        echo "<p>Fecha de Nacimiento: {$row['fecha_nacimiento']}</p>";
        echo "<p>Email: {$row['email']}</p>";
    } else {
        echo "<p>Usuario no encontrado.</p>";
    }

	// Cerrar la conexión a la base de datos
	mysqli_close($conn);	
    ?>
	<!-- Botón de redirección al inicio (cerrar sesión) -->
<a href="index.php" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px;">Inicio (se cerrará la sesión del usuario)</a>

<!-- Botón para modificar datos -->
<a href="http://localhost:81/modify_user.php?user=<?php echo urlencode($user); ?>" style="display: inline-block; padding: 10px 20px; background-color: #28A745; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px;">Modificar datos</a>
</body>
</html>
