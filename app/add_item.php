<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Item</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
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
            margin: 0;
            border-bottom: 2px solid #ddd;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
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
        <script src="comprobaciones.js" ></script>
</head>
<body>
    <h1>Agregar Nuevo Coche</h1>
    <div class="container">
    <form id="item_add_form" action="add_item.php" method="POST">
            <label for="marca_modelo">Nombre de Coche:</label>
            <input type="text" id="marca_modelo" name="marca_modelo" placeholder="Ejemplo: Seat Ibiza 1.9 TDI" required>

            <label for="matricula">Matricula:</label>
            <input type="text" id="matricula" name="matricula" placeholder="1234BBC" required>

            <label for="color">Color:</label>
            <input type="text" id="color" name="color" placeholder="Gris Perla Metalizado" required>

            <!-- Campo para Nombre y Apellidos combinados -->
            <label for="kilometros">Kilometros:</label>
            <input type="text" id="kilometros" name="kilometros" placeholder="200000" required>

            <!-- Campo para DNI -->
            <label for="CV">CV:</label>
            <input type="text" id="CV" name="CV" placeholder="160" required>
            
            <!-- Campo para DNI -->
            <label for="año">Año:</label>
            <input type="text" id="año" name="año" placeholder="2017" required>


            <button id="item_add_submit" name="submit" type="submit">Añadir coche</button>
        </form>
        </div>
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

	// Verificar si el botón ha sido presionado
	if (isset($_POST['submit'])) {
	    // Obtener datos del formulario
	    $marca_modelo = $_POST['marca_modelo'];
	    $matricula = $_POST['matricula'];
	    $color = $_POST['color'];
	    $kilometros = $_POST['kilometros']; 
	    $CV = $_POST['CV'];
	    $año = $_POST['año'];
	    // Preparar la consulta SQL

	    $sql = "INSERT INTO coches (marca_modelo, matricula, color, kilometros, CV, año) 
            VALUES ('$marca_modelo', '$matricula', '$color', '$kilometros', '$CV', '$año')";

	    // Ejecutar la consulta
	    if ($conn->query($sql) === TRUE) {
		 echo "<script>mostrarAlerta('Vehiculo añadido correctamente');</script>";
	    } else {
		if ($conn->errno === 1062) { // 1062 es el código de error para duplicados
         echo "<script>mostrarAlerta('La matricula ya estaba registrada, prueba con otra');</script>";
    } else {
        echo "<script>mostrarAlerta(' error, vuelve a probar con otros datos');</script>";
    }
	    }

	    // Cerrar la declaración
	    if ($stmt) {
	    $stmt->close();
		}

	}

	// Cerrar la conexión
	$conn->close();
	?>
 <nav>
        <a href="index.php">Inicio</a>
    </nav>
</body>
</html>
