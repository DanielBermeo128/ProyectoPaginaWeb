<?php
include ("./header.php");
?>
<title>pw titulacion</title>
<style>
  /* Resetear márgenes y box-sizing */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  /* Altura total */
  html, body {
    height: 100%;
    margin: 0;
  }

  /* Ajustar el header para que no interfiera */
  header {
    height: auto; /* Ajusta según el contenido */
    z-index: 1000; /* Asegura que el header no sea afectado por otros estilos */
  }

  /* Configuración para centrar main */
  main {
    height: calc(100vh - 64px); /* Resta la altura aproximada del header */
    display: flex; /* Flexbox para centrar */
    align-items: center; /* Centrar verticalmente */
    justify-content: center; /* Centrar horizontalmente */
    text-align: center; /* Centrar texto */
  }

  footer {
    margin-top: auto; /* Footer se posiciona abajo */
    padding: 10px 0;
  }

  /* Estilos específicos del menú desplegable */
  .planes {
    text-align: center;
  }

  .input-field select {
    width: 300px; /* Establecer ancho fijo */
    padding: 10px; /* Espaciado interno */
    margin: 0 auto; /* Centrar select */
    display: block; /* Garantizar que ocupe todo el ancho del contenedor */
    font-size: 16px; /* Ajustar tamaño de fuente */
    text-align-last: center; /* Centrar texto dentro del menú desplegable */
  }
</style>

<!-- Importar recursos de Materialize -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
  <main>
    <section class="planes">
      <h2 class="center-align">Modalidades por Plan Estudios de ICO</h2>
      <div class="input-field col s12">
        <select id="planes" class="browser-default" onchange="redirigirPlan()">
          <option value="" disabled selected>Planes</option>
          <option value="plan_8082.php">Plan 0080 y Plan 0082</option>
          <option value="plan_1279_2119.php">Plan 1279 y Plan 2119</option>
        </select>
      </div>
    </section>
  </main>
</body>

<?php
include ("./footer.php");
?>
