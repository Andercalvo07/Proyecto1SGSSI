<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Items</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #444;
            padding: 20px;
            background-color: #fff;
            border-bottom: 2px solid #ddd;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .actions {
            text-align: right;
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }

        p {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .item-links a {
            margin-right: 15px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #218838;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            border-top: 2px solid #ddd;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
            color: #777;
        }
    </style>
</head>
<body>
    <h1>Gestión de Items</h1>
    <div class="container">
        <div class="actions">
            <a href="add_item.php" class="button">Agregar Item</a>
        </div>
        
        <?php
        include 'db.php';  // Conectar a la base de datos

        $query = mysqli_query($conn, "SELECT * FROM items");  // Asumiendo que existe una tabla de items

        while ($row = mysqli_fetch_assoc($query)) {
            echo "<p><strong>{$row['itemName']}</strong> - 
            <span class='item-links'>
                <a href='show_item.php?item={$row['itemID']}'>Ver</a>
                <a href='modify_item.php?item={$row['itemID']}'>Modificar</a>
                <a href='delete_item.php?item={$row['itemID']}'>Eliminar</a>
            </span></p>";
        }
        ?>
    </div>
    
    <nav>
        <a href="index.php">Inicio</a>
        <a href="register.php">Registro</a>
        <a href="login.php">Login</a>
    </nav>

    <footer>
        <p>&copy; 2024 Gestión de Items</p>
    </footer>
</body>
</html>

