<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Datos</title>
</head>
<body>
    <h1>Lista de Empleados</h1>

    <?php
    // Conexión a la base de datos (ajusta los detalles de la conexión)
    $host = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $base_datos = 'sistema';
    $conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consulta SQL para seleccionar todos los registros de la tabla "empleados"
    $consulta = "SELECT * FROM users";
    $resultados = $conexion->query($consulta);

    if ($resultados->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID Usuario</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Opciones</th>
                </tr>";

        while ($fila = $resultados->fetch_assoc()) {
            echo "<tr>
                    <td>" . $fila['Id'] . "</td>
                    <td>" . $fila['Name'] . "</td>
                    <td>" . $fila['apll'] . "</td>
                    <td>" . $fila['Email'] . "</td>
                    <td>" . $fila['Password'] . "</td>
                    <td>
                        <a href='detalles.php?id=" . $fila['Id'] . "'>Ver detalles</a>
                        
                    </td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron registros.";
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
    ?>

</body>
</html>
