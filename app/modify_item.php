<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Item</title>
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
    <h1>Modificar Item</h1>
    <form id="item_modify_form" action="modify_item.php" method="post">
        <?php
        include 'db.php';  // Conectar a la base de datos

        $item = $_GET['item'];
        $query = mysqli_query($conn, "SELECT * FROM coches WHERE matricula='$item'");
        $row = mysqli_fetch_assoc($query);

        if ($row) {
            echo '<label for="item_name">Marca_modelo:</label>';
            echo '<input type="text" id="item_name" name="item_name" value="' . $row['marca_modelo'] . '" required>';
            echo '<input type="hidden" name="matricula" value="' . $item . '">';
        }
        ?>
        <button id="item_modify_submit" name="item_modify_submit" type="item_modify_submit">Guardar Cambios</button>
    </form>
    
    
    
    <?php
	include 'db.php';  // Conectar a la base de datos

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    // Obtén los valores del formulario
	    $matricula = $_POST['matricula'];
	    $item_name = $_POST['item_name'];

	    // Ejecuta la consulta de actualización
	    $query = "UPDATE coches SET marca_modelo='$item_name' WHERE matricula='$matricula'";
	    $result = mysqli_query($conn, $query);

	    if ($result) {
		// Redirige o muestra un mensaje de éxito
		echo "Los cambios se han guardado exitosamente.";
	    } else {
		// Muestra un mensaje de error
		echo "Error al guardar los cambios: " . mysqli_error($conn);
	    }
	}

// Cerrar la conexión
mysqli_close($conn);
?>


</body>
</html>
