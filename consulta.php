<!DOCTYPE html>
<html>
<head>
    <title>Tabla de almacen</title>
</head>
<body>
    <h2>Tabla de Datos</h2>
    <table border="1">
        <tr>
            <th>Codigo</th>
            <th>DESCRIPCION</th>
            <th>CANTIDAD</th>
            <th>ESTADO</th>
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
                echo "</tr>";
            }
        } else {
            echo "No se encontraron resultados.";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
