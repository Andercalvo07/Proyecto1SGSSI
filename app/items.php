<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Items</title>
</head>
<body>
    <h1>Items</h1>
    <a href="add_item.php">Agregar Item</a>
    <?php
    include 'db.php';  // Conectar a la base de datos

    $query = mysqli_query($conn, "SELECT * FROM items");  // Asumiendo que existe una tabla de items

    while ($row = mysqli_fetch_assoc($query)) {
        echo "<p>{$row['itemName']} - <a href='show_item.php?item={$row['itemID']}'>Ver</a> | <a href='modify_item.php?item={$row['itemID']}'>Modificar</a> | <a href='delete_item.php?item={$row['itemID']}'>Eliminar</a></p>";
    }
    ?>
</body>
</html>
