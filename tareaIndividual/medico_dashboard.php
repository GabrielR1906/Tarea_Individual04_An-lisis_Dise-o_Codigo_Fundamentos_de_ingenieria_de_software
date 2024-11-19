<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'medico') {
    header('Location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Médico</title>
    <link rel="stylesheet" href="../fundamentos/tareaIndividual/styles.css">

</head>
<body>
    <header>
        <h1>Bienvenido al Panel de Médico</h1>
        <nav>
            <ul>
                <li><a href="medico_dashboard.php">Inicio</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
    <section class="dashboard">
        <h2>Acciones Médicas</h2>
        <p>Aquí puedes gestionar tus pacientes, ver informes médicos, etc.</p>
        <ul>
            <li><a href="#">Ver pacientes</a></li>
            <li><a href="#">Gestionar citas</a></li>
            <li><a href="#">Ver historial médico</a></li>
        </ul>
    </section>
    <footer>
        <p>&copy; 2024 Clínica San José</p>
    </footer>
</body>
</html>
