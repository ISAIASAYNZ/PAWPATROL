<?php

include 'conexion.php';
// Realizar la conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Realizar la consulta SQL para seleccionar todas las mascotas
$sql = "SELECT * FROM mascotas";
$result = mysqli_query($conn, $sql);

// Verificar si se obtuvieron resultados
if (mysqli_num_rows($result) > 0) {
    // Recorrer los resultados y mostrar los datos de las mascotas
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h3>" . $row['nombre'] . "</h3>";
        echo "<p>Tipo: " . $row['tipo'] . "</p>";
        echo "<p>Edad: " . $row['edad'] . "</p>";
        echo "<hr>";
    }
} else {
    echo "<p>No se encontraron mascotas.</p>";
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
