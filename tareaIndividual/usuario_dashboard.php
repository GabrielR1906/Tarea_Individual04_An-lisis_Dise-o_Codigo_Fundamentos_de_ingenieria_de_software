<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'usuario') {
    header('Location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Usuario</title>
    <link rel="stylesheet" href="../fundamentos/tareaIndividual/styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido al Panel de Usuario</h1>
        <nav>
            <ul>
                <li><a href="usuario_dashboard.php">Inicio</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
    <section class="dashboard">
        <h2>Acciones de Usuario</h2>
        <p>Aquí puedes ver tus citas médicas, acceder a tu historial médico y más.</p>
        <ul>
            <li><a href="#">Ver citas médicas</a></li>
            <li><a href="#">Ver historial médico</a></li>
            <li><a href="#">Actualizar información personal</a></li>
        </ul>
    </section>
    <footer>
        <p>&copy; 2024 Clínica San José</p>
    </footer>
</body>
</html>
