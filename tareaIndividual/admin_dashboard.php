<?php
// Iniciar sesión para verificar el rol
session_start();

// Verificar si el usuario está autenticado y tiene el rol de administrador
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'administrador') {
    header('Location: index.html');  // Redirigir al login si no es admin
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <link rel="stylesheet" href="../fundamentos/tareaIndividual/styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido al Panel de Administrador</h1>
        <nav>
            <ul>
                <li><a href="admin_dashboard.php">Inicio</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>

    <section class="dashboard">
        <h2>Acciones Administrativas</h2>
        <p>Aquí puedes gestionar los usuarios, ver estadísticas y más.</p>
        
        <!-- Aquí puedes agregar más elementos para el panel de administración -->
        <div class="admin-actions">
            <button><a href="manage_users.php">Gestionar Usuarios</a></button>
            <button><a href="view_reports.php">Ver Informes</a></button>
            <button><a href="settings.php">Configuración</a></button>
        </div>
    </section>
    
    <footer>
        <p>&copy; 2024 Clínica San José</p>
    </footer>
</body>
</html>
