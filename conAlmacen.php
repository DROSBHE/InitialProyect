<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "sistema"; 


$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$estado = $_POST['estado'];
$responsable= $_POST['responsable'];




$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$sql = "INSERT INTO almacen (codigo_producto, descripcion_producto,
cantidad_producto, estado_producto, responsable_producto)
        VALUES ('$codigo', '$descripcion', '$cantidad', '$estado', '$responsable')";

if ($conn->query($sql) === TRUE) {

  
 echo "<script>alert('Producto registrado con exito!');</script>";
 header("location: administrador.html");

} else {

    echo "Error al registrar: " . $conn->error;
    
}


$conn->close();
?>