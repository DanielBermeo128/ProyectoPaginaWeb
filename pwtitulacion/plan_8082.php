<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan 80, 82</title>

    <!-- Import Google Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Import materialize.css desde CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
  </head>

  <body>
    <?php include ("./header.php"); ?>

    <main class="container">
      <section class="contenido">
        <h1 class="center-align">Plan 80, 82</h1> 
        <p><strong>• Modalidad: Con trabajo escrito y réplica oral</strong></p> <!-- titulo de la modalidad -->
        <div class="row">

        <!-- Acordeón con collapsible -->
        <div class="row">
          <div class="col s12">
            <ul class="collapsible popout">
              <li>                                        <!-- icono de lapiz tachado-->  <!-- tiulo de las modalidades-->
              <div class="collapsible-header"><i class="material-icons">edit</i><strong>• Tesis o Tesina Profesional:</strong></div>
                <div class="collapsible-body"><span>Consiste en la elaboración de una tesis o una tesina y debe ser defendida ante un jurado. Es una modalidad común para estudiantes interesados en la investigación, docencia o profundizar un tema de su carrera.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons"></i><strong>• Examen general de conocimientos:</strong></div>
                <div class="collapsible-body"><span>El estudiante presenta un examen que evalúa los conocimientos adquiridos a lo largo de toda la carrera.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons"></i><strong>• Examen por área de conocimiento:</strong></div>
                <div class="collapsible-body"><span>El examen se divide en varias áreas del conocimiento relacionadas con la ingeniería en computación.</span></div>
              </li>
              <li>                                                      <!-- icono de voz-->                   
              <div class="collapsible-header"><i class="material-icons">record_voice_over</i><strong>• Informe de prácticas profesionales:</strong></div>
                <div class="collapsible-body"><span>El estudiante debe elaborar un informe detallado sobre las actividades realizadas en su práctica profesional, demostrar cómo aplicó los conocimientos adquiridos durante la carrera y defenderlo ante un jurado.</span></div>
              </li>
              <li>                                                                           
              <div class="collapsible-header"><i class="material-icons"></i><strong>• Desarrollo de proyecto o prototipo tecnológico:</strong></div>
                <div class="collapsible-body"><span>Esta modalidad permite al estudiante desarrollar un prototipo, software, sistema o proyecto tecnológico. El proyecto debe abordar un problema real y proponer una solución innovadora. El estudiante presenta el proyecto, lo documenta y lo defiende ante un jurado.</span></div>
              </li>
            </ul>
          </div>
        </div>

        <p><strong>• Modalidad: Sin trabajo escrito</strong></p>
        <div class="row">

        <!-- Acordeón con collapsible -->
        <div class="row">
          <div class="col s12">
            <ul class="collapsible popout">
              <li>                                                <!-- icono de lapiz tachado-->           <!-- tiulo de las modalidades-->
              <div class="collapsible-header"><i class="material-icons">edit_off</i><strong>• Titulación por alto rendimiento académico:</strong></div>
                <div class="collapsible-body"><span>Esta modalidad está disponible para los estudiantes que logran un promedio mínimo de 9.0 (aunque en algunas generaciones puede ser superior, como 9.5) al concluir la carrera.</span></div>
              </li>
              <li>                                                    <!-- espacio para el icono vacio--> 
                <div class="collapsible-header"><i class="material-icons"></i><strong>• Ampliación y profundización de conocimientos:</strong></div>
                <div class="collapsible-body"><span>El estudiante debe cursar y aprobar materias adicionales (normalmente de nivel de posgrado o especialización) que complementen su formación profesional.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons"></i><strong>• Titulación por servicio social con informe.</strong></div>
                <div class="collapsible-body"><span>En esta modalidad, el estudiante elabora un informe detallado de las actividades realizadas durante el servicio social. Es una opción para quienes desean seguir preparándose académicamente en áreas específicas de la ingeniería en computación.</span></div>
              </li>
              <li>                                                                           
              <div class="collapsible-header"><i class="material-icons"></i><strong>• Estudios de posgrado:</strong></div>
                <div class="collapsible-body"><span>El estudiante puede titularse al cursar y aprobar un porcentaje determinado (generalmente el primer semestre o el 50%) de un programa de maestría en una disciplina afín a la ingeniería en computación. Es ideal para aquellos que desean continuar con estudios de posgrado y, al mismo tiempo, obtener su título de licenciatura</span></div>
              </li>
            </ul>
          </div>
        </div>


        
      </section>
    </main>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      M.AutoInit();
    </script>

    <!-- Pie de página-->
    <?php include ("./footer.php"); ?>
  </body>
</html>
