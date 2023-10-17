<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "sistema"; 


$codigo = $_POST['Codigo'];
$name_producto = $_POST['name_producto'];
$foto = $_POST['foto'];



$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$sql = "INSERT INTO producto (Codigo, name_producto, foto)
        VALUES ('$codigo', '$name_producto', '$foto')";

if ($conn->query($sql) === TRUE) {

  
 echo "<script>alert('Producto registrado con exito!');</script>";
 header("location: administrador.html");

} else {

    echo "Error al registrar: " . $conn->error;
    
}


$conn->close();
?>