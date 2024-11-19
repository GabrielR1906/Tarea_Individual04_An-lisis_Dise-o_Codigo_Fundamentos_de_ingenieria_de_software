<?php
// Iniciar sesión para verificar el acceso
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'administrador') {
    header('Location: index.html');  // Redirigir si no es admin
    exit();
}

// Conectar a la base de datos
include('db.php');

// Obtener los usuarios desde la base de datos
$query = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Usuarios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Gestionar Usuarios</h1>
        <nav>
            <ul>
                <li><a href="admin_dashboard.php">Inicio</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>

    <section class="user-list">
        <h2>Lista de Usuarios</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($user = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$user['id']}</td>
                            <td>{$user['nombre']}</td>
                            <td>{$user['correo']}</td>
                            <td>{$user['rol']}</td>
                            <td><a href='edit_user.php?id={$user['id']}'>Editar</a> | <a href='delete_user.php?id={$user['id']}'>Eliminar</a></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </section>

    <footer>
        <p>&copy; 2024 Clínica San José</p>
    </footer>
</body>
</html>
