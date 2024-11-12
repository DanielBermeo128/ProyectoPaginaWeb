<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro de Modalidad</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>
<body>
<header>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maqueta Responsive</title>

  <!-- CSS  -->
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
  
          
          <a href="#" class="brand-logo center">Formulario de estudiantes ICO</a>

          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="formulario.php">Formulario</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div>
      </nav>
    </header>
</head>
    </header>
<div class="container">
    <h1 class="center-align">Registro de Modalidad</h1>
    <form action="tu_procesador.php" method="POST">
        
        
        <div class="input-field">
            <input type="number" id="no_cuenta" name="no_cuenta" required>
            <label for="no_cuenta">Número de Cuenta</label>
        </div>

        
        <div class="input-field">
            <input type="text" id="ap_paterno" name="ap_paterno" required>
            <label for="ap_paterno">Apellido Paterno</label>
        </div>

        
        <div class="input-field">
            <input type="text" id="ap_materno" name="ap_materno" required>
            <label for="ap_materno">Apellido Materno</label>
        </div>

        
        <div class="input-field">
            <input type="text" id="nombre" name="nombre" required>
            <label for="nombre">Nombre</label>
        </div>

        
        <div class="input-field">
            <select id="modalidad" name="modalidad" required>
                <option value="" disabled selected>Seleccione una Modalidad</option>
                <option value="1">Tesis</option>
                <option value="2">Examen Profesional</option>
                <option value="3">Curso de Titulación</option>
                <!-- Añadir más opciones según tu tabla de modalidades -->
            </select>
            <label for="modalidad">Modalidad</label>
        </div>

        
        <div class="input-field">
            <input type="text" id="fecha_inicio_tramite" name="fecha_inicio_tramite" class="datepicker" required>
            <label for="fecha_inicio_tramite">Fecha de Inicio de Trámite</label>
        </div>

        
        <div class="input-field">
            <input type="text" id="asesor" name="asesor" required>
            <label for="asesor">Asesor</label>
        </div>

        
        <div class="input-field">
            <input type="text" id="fecha_titulacion" name="fecha_titulacion" class="datepicker">
            <label for="fecha_titulacion">Fecha de Titulación</label>
        </div>

        
        <button type="submit" class="btn waves-effect waves-light amber accent-4">
  <i class="material-icons left">send</i>Registrar
</button>
    </form>
</div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elemsDate = document.querySelectorAll('.datepicker');
            M.Datepicker.init(elemsDate, {
                format: 'yyyy-mm-dd'
            });
            
            var elemsSelect = document.querySelectorAll('select');
            M.FormSelect.init(elemsSelect);
        });
    </script>
</body>
</html>
<?php
include ("./footer.php");
?>
