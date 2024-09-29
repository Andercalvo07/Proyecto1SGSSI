<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Item</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
	    flex-direction: column;
	    align-items:center;
            height: 100vh; /* Ocupa toda la altura de la pantalla */
        }

        h1 {
            width:100%;
            text-align: center;
            color: #444;
            padding: 20px;
            background-color: #fff;
            margin: 0  0 20px 0; /* Espacio entre los elementos */
            border-bottom: 2px solid #ddd;
            flex-direction: column; /* Apilado en fila (horizontal) */
        }
        
        p {
            text-align: center;
            padding: 20px;
            margin: 20px 20px; /* Espacio entre los elementos */
            font-weight: bold;
            background-color: light-blue;
            border: 1px solid #ddd;
            text-decoration: none;
            color: #333;
            border-radius: 5px;
        }

        a {
	    width: fit-content;
            text-align: center;
            padding: 20px;
            margin: 20px 20px; /* Espacio entre los elementos */
            font-weight: bold;
            background-color: #fff;
            border: 1px solid #ddd;
            text-decoration: none;
            color: #333;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #eee;
        }

        button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
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
    <h1>Eliminar Item</h1>
    <?php
    
    // Conexión a la base de datos
	$servername = "db";
	$username = "admin";  // Cambiar por tu usuario de MySQL
	$password = "test";      // Cambiar por tu contraseña de MySQL
	$dbname = "database";  // Nombre de tu base de datos

	// Crear conexión
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Verificar conexión
	if ($conn->connect_error) {
	    die("Conexión fallida: " . $conn->connect_error);
	}
    
    
    $item = $_GET['item'];
    $query = mysqli_query($conn, "DELETE FROM coches WHERE marca_modelo='$item'");

    if ($query) {
        echo "<p> '$item' eliminado con éxito.</p>";
    } else {
        echo "<p>Error al eliminar el item.</p>";
    }
    ?>
    <a href="items.php">Volver a la lista de Items</a>
</body>
</html>
