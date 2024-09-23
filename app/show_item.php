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
    $query = mysqli_query($conn, "SELECT * FROM items WHERE itemID='$item'");

    if ($row = mysqli_fetch_assoc($query)) {
        echo "<p>Nombre: {$row['itemName']}</p>";
        // Añade más campos si es necesario
    } else {
        echo "<p>Item no encontrado.</p>";
    }
    ?>
</body>
</html>
