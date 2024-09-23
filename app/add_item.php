<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Item</title>
</head>
<body>
    <h1>Agregar Nuevo Item</h1>
    <form id="item_add_form" action="add_item.php" method="post">
        <label for="item_name">Nombre del Item:</label>
        <input type="text" id="item_name" name="item_name" required>
        <button id="item_add_submit" type="submit">Agregar Item</button>
    </form>
</body>
</html>
