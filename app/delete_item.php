<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Item</title>
</head>
<body>
    <h1>Eliminar Item</h1>
    <?php
    include 'db.php';  // Conectar a la base de datos

    $item = $_GET['item'];
    $query = mysqli_query($conn, "DELETE FROM items WHERE itemID='$item'");

    if ($query) {
        echo "<p>Item eliminado con éxito.</p>";
    } else {
        echo "<p>Error al eliminar el item.</p>";
    }
    ?>
    <a href="items.php">Volver a la lista de Items</a>
</body>
</html>
