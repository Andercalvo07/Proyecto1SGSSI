<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Item</title>
</head>
<body>
    <h1>Detalles del Item</h1>
    <?php
    include 'db.php';  // Conectar a la base de datos

    $item = $_GET['item'];
    $query = mysqli_query($conn, "SELECT * FROM coches WHERE matricula='$item'");

    if ($row = mysqli_fetch_assoc($query)) {
        echo "<p>Nombre: {$row['marca_modelo']}</p>";
        echo "<p>Nombre: {$row['matricula']}</p>";
        echo "<p>Nombre: {$row['color']}</p>";
        echo "<p>Nombre: {$row['kilometros']}</p>";
        echo "<p>Nombre: {$row['CV']}</p>";
         echo "<p>Nombre: {$row['año']}</p>";
    } else {
        echo "<p>Coche no encontrado.</p>";
    }
    ?>
</body>
</html>
