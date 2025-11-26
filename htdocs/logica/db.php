<?php
$host = '127.0.0.1:3306';
$user = 'root';
$pass = 'admin123';
$dbName = 'crud_app_proyecto';

$conn = new mysqli($host,$user,$pass,$dbName);

if( $conn -> connect_error){
    die('Error en la conexión: '.$conn->connect_error);
}
    
?>