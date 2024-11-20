<?php
session_start(); // Iniciar la sesión
session_destroy(); // Destruir todas las variables de la sesión
header("Location: ../index.php"); // Redirigir al formulario de login
exit;
?>
