<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Empleado</title>
</head>
<body>
    <h1>Detalles del Empleado</h1>

    <?php
    
    if (isset($_GET['id'])) {
        
        $host = 'localhost';
        $usuario = 'root';
        $contrasena = '';
        $base_datos = 'sistema';
        $conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        
        $id_empleado = $conexion->real_escape_string($_GET['id']);

        
        $consulta = "SELECT * FROM users WHERE Id = $id_empleado";
        $resultado = $conexion->query($consulta);

        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            echo "<p>ID empleado: " . $fila['Id'] . "</p>";
            echo "<p>Nombre: " . $fila['Name'] . "</p>";
            echo "<p>Apellidos: " . $fila['apll'] . "</p>";
            echo "<p>Email: " . $fila['Email'] . "</p>";
            echo "<p>Contraseña: " . $fila['Password'] . "</p>";
            

        } else {
            echo "No se encontró el empleado.";
        }

        
        $conexion->close();
    } else {
        echo "ID de empleado no proporcionado.";
    }
    ?>

</body>
</html>
