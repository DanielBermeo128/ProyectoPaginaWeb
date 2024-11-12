<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan 2119</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css desde CDN-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

    <!-- Estilos personalizados para mantener el footer abajo -->
   
  </head>

  <body>
    <!-- Encabezado -->
    <?php
include ("./header.php");
?>

    <!-- Contenido principal -->
    <main class="container">
      <section class="contenido">
        <h2 class="center-align">Plan 2119</h2>
        <p><strong>• Requisitos</strong></p>
        <div class="row">
          <div class="col s12">
            <ul class="collapsible popout">
              <li>
                <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
              </li>
            </ul>
          </div>

      </section>
    </main>

    <!-- Pie de página -->
    <?php
include ("./footer.php");
?>
    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      M.AutoInit();
    </script>
  </body>
</html>
