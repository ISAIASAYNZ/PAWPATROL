<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "veterinaria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}
?>
