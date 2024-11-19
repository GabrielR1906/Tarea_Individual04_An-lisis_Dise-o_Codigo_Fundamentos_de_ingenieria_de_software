<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'enfermero') {
    header('Location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Enfermero</title>
    <link rel="stylesheet" href="../fundamentos/tareaIndividual/styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido al Panel de Enfermero</h1>
        <nav>
            <ul>
                <li><a href="enfermero_dashboard.php">Inicio</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
    <section class="dashboard">
        <h2>Acciones de Enfermería</h2>
        <p>Aquí puedes gestionar la atención a los pacientes, realizar seguimientos, etc.</p>
        <ul>
            <li><a href="#">Ver pacientes</a></li>
            <li><a href="#">Realizar seguimiento de pacientes</a></li>
            <li><a href="#">Ver informes de enfermería</a></li>
        </ul>
    </section>
    <footer>
        <p>&copy; 2024 Clínica San José</p>
    </footer>
</body>
</html>
