<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

$email = $_POST['email']; 
$password = $_POST['password']; 


if (strpos($email, '@gmail.com') !== false) {
  
    $_SESSION['email'] = $email;
    header("Location: modifyInfProduct.php");
} else {
   
    $_SESSION['email'] = $email;
    header("Location: menu.php");
}

$conn->close();
?>