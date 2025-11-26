<?php
include("db.php");

$id = $_GET['id'];
$nombre = $_GET['nombre'];
$email = strtolower($_GET['email']); // Convierte todo a minúsculas.
$telefono = $_GET['telefono'];

// VALIDACIÓN DE FORMATOS PARA EMAIL Y TELEFONO
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Correo inválido: solo minúsculas, sin acentos y formato válido.'); window.location='../listar.php';</script>";
        exit();
}

if (!preg_match('/^[0-9]{10}$/', $telefono)) {
        echo "<script>alert('El teléfono debe contener solo 10 caracteres numéricos.'); window.location='../listar.php';</script>";
        exit();
}

$sql = "UPDATE usuarios 
        SET nombre='$nombre', email='$email', telefono='$telefono'
        WHERE id=$id";

$conn->query($sql);

header("Location: ../listar.php");
?>
