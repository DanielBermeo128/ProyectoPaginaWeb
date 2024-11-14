<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan 1759</title>
    <link rel="stylesheet" href="css/timeline.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css desde CDN-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
  </head>

  <body>
    
    <?php
include ("./header.php");
?>

    <!-- targeta de lo requisitos -->
    <main class="container">
      <section class="contenido">
        <h2 class="center-align">Plan 1759</h2>
        <p><strong>• Requisitos</strong></p>
        <div class="center-card">
        <div class="card-container">
            <div class="card blue darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Requisitos</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    </div>


  <p><strong>• Modalidad: Con trabajo escrito y réplica oral</strong></p>
          <div class="col s12">
            <ul class="collapsible popout">
              <li>                                         <!-- aqui estan los icono de las modalidades la pueden poenr del pan 8082 -->
                <div class="collapsible-header"><i class="material-icons">record_voice_over</i>First</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">no_sim</i>Third</div>
                <div class="collapsible-body"><span>Lorem ipsum dolr sit amet.</span></div>
              </li>
            </ul>
          </div>
      </section>
    </main>

    <!-- Pie de página -->
    <?php
include ("./footer.php");
?>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      M.AutoInit();
    </script>
  </body>
</html>