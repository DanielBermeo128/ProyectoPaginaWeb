<?php
include ("./header.php");
?>
  <title>pw titulacion</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
      }
      footer {
        padding: 0px 0;
      }
  </style>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

    <script>
      function redirigirPlan() {
        var planSeleccionado = document.getElementById("planes").value;
        if (planSeleccionado) {
          window.location.href = planSeleccionado;
        }
      }
    </script>
  </head>

  <body>
    <main class="container">
      <section class="planes">
        <h2 class="center-align">Selecciona un Plan de Estudio</h2>
        <div class="input-field col s12">
          <select id="planes" class="browser-default" onchange="redirigirPlan()">
            <option value="" disabled selected>--Selecciona un plan--</option>
            <option value="plan_8082.php">Plan 80,82</option>
            <option value="plan_1759.php">Plan 1759</option>
            <option value="plan_2119.php">Plan 2119</option>
          </select>
        </div>

        <!-- Sección de contenido con diseño responsivo -->
        <div class="row">
          <div class="col s12 m4">
            <div class="card">
              <div class="card-content">
                <span class="card-title">1</span>
                <p>1.</p>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-content">
                <span class="card-title">2</span>
                <p>2.</p>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-content">
                <span class="card-title">3</span>
                <p>3.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  <?php
include ("./footer.php");
?>