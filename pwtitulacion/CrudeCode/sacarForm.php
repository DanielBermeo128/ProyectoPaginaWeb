<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$dbname = 'registros';
$user = 'root'; 
$password = '1234'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recoger datos del formulario
        $no_cuenta = filter_input(INPUT_POST, 'no_cuenta', FILTER_VALIDATE_INT);
        $ap_paterno = filter_input(INPUT_POST, 'ap_paterno', FILTER_SANITIZE_STRING);
        $ap_materno = filter_input(INPUT_POST, 'ap_materno', FILTER_SANITIZE_STRING);
        $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
        $modalidad = filter_input(INPUT_POST, 'modalidad', FILTER_VALIDATE_INT);
        $d_modalidad = filter_input(INPUT_POST, 'd_modalidad', FILTER_SANITIZE_STRING);
        $fecha_inicio_tramite = filter_input(INPUT_POST, 'fecha_inicio_tramite', FILTER_SANITIZE_STRING);
        $asesor = filter_input(INPUT_POST, 'asesor', FILTER_SANITIZE_STRING);
        $fecha_titulacion = filter_input(INPUT_POST, 'fecha_titulacion', FILTER_SANITIZE_STRING);

        if ($no_cuenta && $ap_paterno && $ap_materno && $nombre && $modalidad && $d_modalidad && $fecha_inicio_tramite && $asesor) {
            $sql = "INSERT INTO registros_modalidad 
                    (no_cuenta, ap_paterno, ap_materno, nombre, modalidad, d_modalidad, fecha_inicio_tramite, asesor, fecha_titulacion)
                    VALUES 
                    (:no_cuenta, :ap_paterno, :ap_materno, :nombre, :modalidad, :d_modalidad, :fecha_inicio_tramite, :asesor, :fecha_titulacion)";
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':no_cuenta' => $no_cuenta,
                ':ap_paterno' => $ap_paterno,
                ':ap_materno' => $ap_materno,
                ':nombre' => $nombre,
                ':modalidad' => $modalidad,
                ':d_modalidad' => $d_modalidad,
                ':fecha_inicio_tramite' => $fecha_inicio_tramite,
                ':asesor' => $asesor,
                ':fecha_titulacion' => $fecha_titulacion ?: null
            ]);

            echo "<script>alert('Registro exitoso'); window.location.href = '../index.php';</script>";
        } else {
            echo "<script>alert('Por favor, complete todos los campos obligatorios'); history.back();</script>";
        }
    }
} catch (PDOException $e) {
    echo "Error en la conexión o consulta: " . $e->getMessage();
}
?>