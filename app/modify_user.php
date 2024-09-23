<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Usuario</title>
</head>
<body>
    <h1>Modificar Usuario</h1>
    <form id="user_modify_form" action="modify_user.php" method="post">
        <?php
        include 'db.php';  // Conectar a la base de datos

        $user = $_GET['user'];
        $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombreUsuario='$user'");
        $row = mysqli_fetch_assoc($query);

        if ($row) {
            echo '<label for="name">Nombre:</label>';
            echo '<input type="text" id="name" name="name" value="' . $row['NombreApellidos'] . '" required>';
            echo '<label for="dni">DNI:</label>';
            echo '<input type="text" id="dni" name="dni" value="' . $row['DNI'] . '" required>';
            echo '<label for="phone">Teléfono:</label>';
            echo '<input type="text" id="phone" name="phone" value="' . $row['telefono'] . '" required>';
            echo '<label for="birthdate">Fecha de Nacimiento:</label>';
            echo '<input type="date" id="birthdate" name="birthdate" value="' . $row['fechaNcto'] . '" required>';
            echo '<label for="email">Email:</label>';
            echo '<input type="email" id="email" name="email" value="' . $row['email'] . '" required>';
            echo '<input type="hidden" name="username" value="' . $user . '">';
        }
        ?>
        <button id="user_modify_submit" type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
