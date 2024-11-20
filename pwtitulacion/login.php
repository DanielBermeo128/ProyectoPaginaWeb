<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="styles.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <header>
      <nav class="amber accent-4"> 
        <div class="nav-wrapper"> 
          <!-- Imagen izquierda -->
          <a href="#">
            <img src="public/unamblanco.png" alt="Logo UNAM" style="height: 50px; margin-top: 5px; margin-left: 15px;" >
            <img src="public/fesblanco.png" alt="Logo FES" style="height: 50px; margin-top: 5px; margin-left: 10px;">
            <img src="public/2icoblanco.png" alt="Logo ICO" style="height: 50px; margin-top: 5px;">
          </a>
  
          <!-- Título del sitio centrado -->
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
    
    <section class="contenido">
    <h1 class="center-align">Login</h1>
    <div class="row">
    <form class="col s12" action="CrudeCode/logear.php" method="POST">
    <div class="row">
        <div class="input-field col s6">
            <input id="numero_cuenta" name="numero_cuenta" type="text" class="validate" placeholder="Ejemplo: 123456789" required>
            <label for="numero_cuenta">Número de cuenta</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="password" name="password" type="password" class="validate" required>
            <label for="password">Contraseña</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="email" name="email" type="email" class="validate" placeholder="ejemplo@correo.com" required>
            <label for="email">Correo electrónico</label>
        </div>
    </div>
    <div class="row">
        <div class="col s12 center-align">
            <button type="submit" class="btn waves-effect waves-light blue">
                <i class="material-icons left">login</i>Iniciar sesión
            </button>
        </div>
    </div>
</form>

    </div>
</section>

    
    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      M.AutoInit();
    </script>
</body>
</html>