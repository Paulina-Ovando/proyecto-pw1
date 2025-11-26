<?php
include("db.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];


// VALIDACIÓN DE FORMATOS PARA EMAIL Y TELEFONO

$email = strtolower($_POST['email']); // Convierte todo a minúsculas.

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Correo inválido'); window.location='../registro.php';</script>";
        exit();
}

if (!preg_match('/^[0-9]{10}$/', $telefono)) {
        echo "<script>alert('El teléfono debe contener solo 10 caracteres numéricos'); window.location='../registro.php';</script>";
        exit();
}


$sql = "INSERT INTO usuarios (nombre, email, telefono)
        VALUES ('$nombre', '$email', '$telefono')";

$conn->query($sql);

header("Location: ../listar.php");
?>
