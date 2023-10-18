<?php
include("connregistro.php");

$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$estado = $_POST['estado'];
$responsable= $_POST['responsable'];
$encargado= $_POST['encargado'];




$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$sql = "INSERT INTO almacen (codigo_producto, descripcion_producto,
cantidad_producto, estado_producto, responsable_empleado, encargado_responsable)
        VALUES ('$codigo', '$descripcion', '$cantidad', '$estado', '$responsable', '$encargado')";

if ($conn->query($sql) === TRUE) {


 echo "<script>alert('Producto registrado con exito!');</script>";
 header("location: addproducto.php");

} else {

    echo "Error al registrar: " . $conn->error;

}


$conn->close();
?>