<?php
session_start();
include("db.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE usuario='$usuario' 
        AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['admin'] = $usuario;
    header("Location: ../listar.php");
} else {
    echo "<script>
            alert('Usuario o contraseña incorrectos');
            window.location='../index.php';
          </script>";
}
?>