<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplogin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['contraseña'];

$sql = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if ($row['email'] == "@gmail") {
        $_SESSION['email'] = $email;
        header("Location: administrador.html");
    } elseif ($row['email'] !="@gmail") {
        $_SESSION['email'] = $email;
        header("Location: principal.html");
    } else {
        echo "<script>alert('Tipo de usuario no valido');</script>";
    }
} else {
    echo "<script>alert('Credenciales incorrectas');</script>";
    
}

$conn->close();
?>
