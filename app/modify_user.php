<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Usuario</title>
    <script src="comprobaciones.js"></script> 
</head>
<body>
    <h1>Modificar Usuario</h1>

    <?php
    include 'db.php';  // Conectar a la base de datos

    // Verificar que la conexión a la base de datos sea válida
    if ($conn === null) {
        die("No se pudo establecer la conexión a la base de datos.");
    }

    // Obtener el usuario a modificar
    $user = $_GET['user'];

    // Variable para controlar el mensaje de error
    $error_message = '';

    // Manejo del envío del formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtener los datos del formulario
        $nombreApellidos = mysqli_real_escape_string($conn, $_POST['nombre_apellidos']);
        $dni = mysqli_real_escape_string($conn, $_POST['dni']);
        $telefono = mysqli_real_escape_string($conn, $_POST['telefono']);
        $fechaNacimiento = mysqli_real_escape_string($conn, $_POST['fecha_nacimiento']);
        $email = mysqli_real_escape_string($conn, $_POST['mail']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);

        // Actualizar los datos en la base de datos
        $sql = "UPDATE usuarios SET nombre_apellidos='$nombreApellidos', dni='$dni', telefono='$telefono', fecha_nacimiento='$fechaNacimiento', email='$email' WHERE username='$username'";
        
        if (mysqli_query($conn, $sql)) {
            // Mostrar mensaje de éxito
            echo "<p>Datos actualizados correctamente.</p>";
           
        } else {
            if ($conn->errno === 1062) { // 1062 es el código de error para duplicados
                $error_message = 'DNI ya está registrado, prueba con otro.';
            } else {
                $error_message = 'Error, mete otros datos.';
            }
        }
    }

    // Consulta para obtener los datos del usuario
    $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE username='$user'");
    
    // Manejo de errores en la consulta
    if (!$query) {
        die("Error en la consulta: " . mysqli_error($conn));
    }

    $row = mysqli_fetch_assoc($query);

    // Comprobar si se encontró el usuario
    if ($row) {
        // Mostrar el mensaje de error si existe
        if ($error_message) {
            echo "<script>mostrarAlerta('$error_message');</script>";
        }

        // Formulario para modificar datos del usuario
        echo '<form id="user_modify_form" action="modify_user.php?user=' . urlencode($user) . '" method="post" onsubmit="return validarFormulario();">';
        echo '<label for="nombre_apellidos">Nombre y apellidos:</label>';
        echo '<input type="text" id="nombre_apellidos" name="nombre_apellidos" value="' . htmlspecialchars($row['nombre_apellidos']) . '" required><br>'; 
        echo '<label for="dni">DNI:</label>';
        echo '<input type="text" id="dni" name="dni" value="' . htmlspecialchars($row['dni']) . '" required><br>'; 
        echo '<label for="telefono">Teléfono:</label>';
        echo '<input type="text" id="telefono" name="telefono" value="' . htmlspecialchars($row['telefono']) . '" required><br>'; 
        echo '<label for="fecha_nacimiento">Fecha de Nacimiento:</label>';
        echo '<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="' . htmlspecialchars($row['fecha_nacimiento']) . '" required><br>'; 
        echo '<label for="mail">Email:</label>';
        echo '<input type="email" id="mail" name="mail" value="' . htmlspecialchars($row['email']) . '" required><br>'; 
        echo '<input type="hidden" name="username" value="' . htmlspecialchars($user) . '">';
        echo '<button id="user_modify_submit" type="submit">Guardar Cambios</button>';
        echo '</form>';
    } else {
        echo "<p>Usuario no encontrado.</p>";
    }

    echo '<a href="show_user.php?user=' . urlencode($username) . '"><button>Volver</button></a>';
    
    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
    ?>
</body>
</html>
