<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambia esto si es necesario
$password = ""; // Cambia esto si es necesario
$dbname = "usuarios_clinica"; // Asegúrate de que el nombre de la base de datos sea correcto

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Procesar el formulario de login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para verificar el usuario
    $sql = "SELECT * FROM usuarios WHERE correo = '$email' AND contraseña = '$password'";
    $result = $conn->query($sql);

    // Si se encuentra el usuario, redirigir a un dashboard según el rol
    if ($result->num_rows > 0) {
        // Iniciar sesión
        session_start();
        $user = $result->fetch_assoc();
        $_SESSION['rol'] = $user['rol'];
        $_SESSION['nombre'] = $user['nombre'];
        
        // Redirigir según el rol
        switch ($user['rol']) {
            case 'administrador':
                header('Location: admin_dashboard.php');
                break;
            case 'medico':
                header('Location: medico_dashboard.php');
                break;
            case 'enfermero':
                header('Location: enfermero_dashboard.php');
                break;
            default:
                header('Location: usuario_dashboard.php');
                break;
        }
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
    
}

$conn->close();
?>
