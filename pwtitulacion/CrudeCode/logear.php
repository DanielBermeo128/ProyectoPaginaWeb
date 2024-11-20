<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "titulacion"; // Cambia según tu configuración
$password = "123456"; // Cambia según tu configuración
$dbname = "registros";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$numero_cuenta = $_POST['numero_cuenta'];
$password_input = $_POST['password'];
$email = $_POST['email'];

// Consulta para verificar los datos
$sql = "SELECT contrasena FROM admins WHERE no_cuenta = ? AND correo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $numero_cuenta, $email);
$stmt->execute();
$stmt->bind_result($hashed_password);
$stmt->fetch();

if ($hashed_password) {
    // Verificar la contraseña
    if ($password_input == $hashed_password) {
        echo "Inicio de sesión exitoso.";
        // Redirigir al dashboard o a otra página
        session_start(); // Iniciar la sesión

        $_SESSION['logged_in'] = true; // Variable que indica el estado de inicio de sesión
        header("Location: ../registros.php"); // Redirigir a la página protegida
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>
