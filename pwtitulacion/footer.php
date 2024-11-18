<style>
    .redes-icono {
        width: 16px; /* Iconos más pequeños */
        height: 16px;
        margin: 0 5px; /* Reduce el margen entre los iconos */
        transition: transform 0.3s;
    }

    .redes-icono:hover {
        transform: scale(1.1);
    }

    .mb-4 {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 0px; /* Reduce el margen inferior */
    }

    .col-12 {
        text-align: center;
    }

    .footer-derechos {
        font-size: 12px; /* Fuente más pequeña para el texto del footer */
        line-height: 1.4; /* Reduce la altura de línea */
        margin: 0px 0; /* Reduce los márgenes verticales */
    }

    html, body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
    }

    footer.page-footer {
        background-color: #0D47A1; /* Azul oscuro ajustable */
        padding: 0px 0; /* Ajusta el espacio interno del footer */
    }

    footer.page-footer .container {
        padding: 0; /* Elimina padding adicional en el contenedor */
    }

    .hide-container-xl p {
        font-size: 12px; /* Texto más pequeño para el mensaje de redes sociales */
        margin-bottom: 5px; /* Menor margen inferior */
    }
</style>



    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

    <footer class="page-footer blue darken-4">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <footer class="row justify-content-center">
                        <div class="col-12 col-lg-12">
                            <p style="text-align: center;" class="pt-2 pb-2 footer-derechos">
                                Hecho en México, Universidad Nacional Autónoma de México (UNAM), &copy; todos los derechos reservados 2024. Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica. De otra forma, requiere permiso previo por escrito de la institución.
                            </p>
                            <!--
                            <p style="text-align: center;">
                                <a ui-sref="creditos" target="_blank" href="#!/creditos">Créditos</a> |
                                <a ui-sref="llegar_fes_aragon" target="_blank" href="#!/nuestra-facultad/llegar-fes-aragon">Cómo llegar a la FES</a>
                            </p> -->
                        </div>
                        
                        <div class="col-12 col-lg-6 hide-container-xl">
                            <p class="m-0" style="text-align: center;">¡Únete a nuestras redes sociales!</p>
                            <div class="mb-4">
                                <a target="_blank" href="https://www.facebook.com/FESAragonUNAM/" title="Facebook">
                                    <img src="public/faceb.png" alt="Facebook" class="icon redes-icono">
                                </a>
                                <a target="_blank" href="https://twitter.com/fesaragonunam?lang=es" title="Twitter">
                                <img src="public/x.png" alt="twitter" class="icon redes-icono">
                                </a>
                                <a target="_blank" href="https://www.instagram.com/fesaragonunam/?hl=es" title="Instagram">
                                    <img src="public/instagram.png" alt="Instagram" class="icon redes-icono">
                                </a>
                                <a target="_blank" href="https://www.youtube.com/user/UNAMFESAragon" title="Youtube">
                                    <img src="public/youtube.png" alt="YouTube" class="icon redes-icono">
                                </a>
                                <a target="_blank" href="https://open.spotify.com/show/31r7xhdhjEKdhmZ8ZFjike" title="Spotify">
                                    <img src="public/Spotify.png" alt="Spotify" class="icon redes-icono">
                                </a>
                                <a target="_blank" href="https://www.tiktok.com/@fesaragonunam" title="TikTok">
                                    <img src="public/tt.png" alt="tiktok" class="icon redes-icono">
                                    
                                </a>
                                <a target="_blank" href="https://www.pinterest.com.mx/fesaragnunam/" title="Pinterest">
                                    <img src="public/pineterst.png" alt="Pinterest" class="icon redes-icono">
                                </a>
                                <a target="_blank" href="https://wa.me/c/5215580287264" title="WhatsApp">
                                    <img src="public/whatsapp.png" alt="WhatsApp" class="icon redes-icono">
                                </a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
