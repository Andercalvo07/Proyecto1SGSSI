<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Item</title>
</head>
<body>
    <h1>Modificar Item</h1>
    <form id="item_modify_form" action="modify_item.php" method="post">
        <?php
        include 'db.php';  // Conectar a la base de datos

        $item = $_GET['item'];
        $query = mysqli_query($conn, "SELECT * FROM items WHERE itemID='$item'");
        $row = mysqli_fetch_assoc($query);

        if ($row) {
            echo '<label for="item_name">Nombre del Item:</label>';
            echo '<input type="text" id="item_name" name="item_name" value="' . $row['itemName'] . '" required>';
            echo '<input type="hidden" name="itemID" value="' . $item . '">';
        }
        ?>
        <button id="item_modify_submit" type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
