<?php
include 'conexion.php';

$servername = "127.0.0.1";  // Nombre del servidor (por defecto: localhost)
$username = "root";  // Nombre de usuario para acceder a la base de datos
$password = "";  // Contraseña para acceder a la base de datos
$database = "veterinaria";  // Nombre de la base de datos creada en phpMyAdmin

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Agregar mascota
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $tipo = $_POST["tipo"];
    $edad = $_POST["edad"];

    $sql = "INSERT INTO mascotas (nombre, tipo, edad) VALUES ('$nombre', '$tipo', '$edad')";

    if ($conn->query($sql) === true) {
        echo "Mascota agregada correctamente.";
    } else {
        echo "Error al agregar mascota: " . $conn->error;
    }
}

// Resto del código...

// Cerrar la conexión
$conn->close();
?>
