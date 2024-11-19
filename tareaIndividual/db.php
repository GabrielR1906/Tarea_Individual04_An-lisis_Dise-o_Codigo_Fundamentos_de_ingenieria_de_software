<?php
$host = 'localhost';  // El host donde se encuentra la base de datos, normalmente es localhost
$usuario = 'root';     // El usuario de la base de datos (por defecto suele ser 'root')
$clave = '';           // La clave de acceso a la base de datos (puede estar vacía en local)
$base_de_datos = 'usuarios_clinica'; // El nombre de la base de datos que creaste

// Crear la conexión
$conn = new mysqli($host, $usuario, $clave, $base_de_datos);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
