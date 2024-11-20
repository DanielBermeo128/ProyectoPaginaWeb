<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Si no ha iniciado sesión, redirigir al formulario de login
    header("Location: login.php");
    exit; // Detener ejecución del resto del script
}
// Conexión a la base de datos
$servername = "localhost"; // Cambia según tu configuración
$username = "root";        // Cambia según tu configuración
$password = "1234";            // Cambia según tu configuración
$dbname = "registros";     // Cambia según el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Si se envió una solicitud de eliminación
if (isset($_POST['delete'])) {
    $no_cuenta = $_POST['no_cuenta'];
    $sql = "DELETE FROM registros_modalidad WHERE no_cuenta = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $no_cuenta);
    if ($stmt->execute()) {
        echo "<script>alert('Registro eliminado correctamente');</script>";
    } else {
        echo "<script>alert('Error al eliminar el registro');</script>";
    }
    $stmt->close();
}

// Consulta para obtener los datos
$sql = "SELECT rm.no_cuenta, rm.ap_paterno, rm.ap_materno, rm.nombre, 
        m.nombre_modalidad, rm.d_modalidad, rm.fecha_inicio_tramite, 
        rm.asesor, rm.fecha_titulacion 
        FROM registros_modalidad rm
        INNER JOIN modalidades m ON rm.modalidad = m.id_modalidad";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">

<style>
    main{
        margin-bottom: 400px;
    }

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Registros</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>
<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <header>
      <nav class="amber accent-4"> 
        <div class="nav-wrapper"> 
          <a href="#">
            <img src="public/unamblanco.png" alt="Logo UNAM" style="height: 50px; margin-top: 5px; margin-left: 15px;" >
            <img src="public/fesblanco.png" alt="Logo FES" style="height: 50px; margin-top: 5px; margin-left: 10px;">
            <img src="public/2icoblanco.png" alt="Logo ICO" style="height: 50px; margin-top: 5px;">
          </a>
  
          <a href="#" class="brand-logo center">Regsitros de Modalidades</a>

          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="CrudeCode/logout.php">Cerrar Sesion</a></li>
          </ul>
        </div>
      </nav>
    </header>
</head>
<main>
    <div class="container">
        <h3 class="center-align">Registros realizados</h3>

        <!-- Tabla -->
        <table class="striped centered responsive-table">
            <thead>
                <tr>
                    <th>Número de Cuenta</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Nombre</th>
                    <th>Modalidad</th>
                    <th>Descripción Modalidad</th>
                    <th>Fecha Inicio Trámite</th>
                    <th>Asesor</th>
                    <th>Fecha Titulación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['no_cuenta']) ?></td>
                            <td><?= htmlspecialchars($row['ap_paterno']) ?></td>
                            <td><?= htmlspecialchars($row['ap_materno']) ?></td>
                            <td><?= htmlspecialchars($row['nombre']) ?></td>
                            <td><?= htmlspecialchars($row['nombre_modalidad']) ?></td>
                            <td><?= htmlspecialchars($row['d_modalidad']) ?></td>
                            <td><?= htmlspecialchars($row['fecha_inicio_tramite']) ?></td>
                            <td><?= htmlspecialchars($row['asesor']) ?></td>
                            <td><?= htmlspecialchars($row['fecha_titulacion']) ?></td>
                            <td>
                                <form method="POST" style="display: inline;">
                                    <input type="hidden" name="no_cuenta" value="<?= $row['no_cuenta'] ?>">
                                    <button type="submit" name="delete" class="btn red">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="10">No hay registros disponibles.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
                </main>
    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <?php
  include("./footer.php");
  ?>
</body>
</html>
