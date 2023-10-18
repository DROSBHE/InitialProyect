<!doctype html>

<html lang="en">
  <head>
    <title>Almacen</title>
    
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" type="image/x-icon" href="images/BB_login.jpeg">
    <header class ="header">
        <h1>Almacen</h1>
    </header>
  </head>
  
  <body>
  <h2>Tabla de Datos</h2>
    <table border="1">
        <tr>
            <th>CODIGO</th> 
            <th>DESCRIPCION</th>
            <th>CANTIDAD</th>
            <th>ESTADO</th>
            <th>Detalles</th>
        </tr>
        <?php
        // Conexión a la base de datos (reemplaza con tus propios datos)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sistema";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Consulta SQL para seleccionar datos de la tabla
        $sql = "SELECT codigo_producto, descripcion_producto, cantidad_producto, estado_producto FROM almacen";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                
                echo "<td>" . $row["codigo_producto"] . "</td>"; 
                echo "<td>" . $row["descripcion_producto"] . "</td>";
                echo "<td>" . $row["cantidad_producto"] . "</td>";
                echo "<td>" . $row["estado_producto"] . "</td>";
                echo "<td> <button onclick='guardarCambios(" . $row["codigo_producto"] . ")'>Seleccion</button>
            </td>";
                echo "</tr>";
            }
        } else {
            echo "No se encontraron resultados.";
        }

        $conn->close();
        ?>
    </table>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 
	</body>
</html>