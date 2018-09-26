<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Samaria</title>
        <link rel="icon" href="icon-samaria.ico">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">

        <!--Esto se hace para usar algun archivo de estilos solo en cierta pagina-->
        <?php 
            $archivo = basename($_SERVER['PHP_SELF']);
            $pagina = str_replace(".php", "", $archivo);// Esto hace que se quite la extension para usarla como una variable.
            if ($pagina == 'invitados' || $pagina == 'index') {
                echo '<link rel="stylesheet" href="css/colorbox.css">';
            }else if($pagina=='galeria'){
                echo '<link rel="stylesheet" href="css/lightbox.min.css">';
            }
         ?>

        <link rel="stylesheet" href="css/main.css">  
    </head>

    <body class="<?php echo $pagina ;?>">

        <!-- PANTALLA PRINCIPAL -->
        <header class="site-header">
            <div class="hero">
                <div class="contenido-header">
                    <nav class="redes-sociales">
                        <a href="https://www.facebook.com/iglesiasamariaadp/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/channel/UClQqUnhNqlTKZ8_NhjJEPyQ" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </nav>
                    <div class="informacion-evento">
                        <div class="clearfix fecha-hora">
                            <div class="fecha-titulo">
                                <p class="fecha"> <i class="fa fa-calendar" aria-hidden="true"></i> 6 - Febrero - 2018</p>  
                            </div>
                            <div class="ciudad-titulo">
                                <p class="ciudad"><i class="fa fa-map-marker" aria-hidden="true"></i> Huaycan, Lima, Peru</p>
                            </div>          
                        </div>
                        <h1 class="nombre-sitio">IV ESCUELA IMPARABLES 2018</h1>
                        <p class="slogan"><span> L A  -  H I S T O R I A -  C O N T I N U A </span></p>
                        <div class="cuenta-regresiva-header contenedor">
                            <ul class="clearfix">
                                <li><p id="dias1" class="numero"></p><br>Dias</li>
                                <li><p id="horas1" class="numero"></p><br>Horas</li>
                                <li><p id="minutos1" class="numero"></p><br>Minutos</li>
                                <li><p id="segundos1" class="numero"></p><br>Segundos</li>
                            </ul>
                        </div><!--cuenta regresiva-->
                    </div> <!-- Informacion Evento-->
                </div> <!-- Contenido Header-->
            </div> <!-- hero-->
        </header>
        
        <!-- BARRA DE NAVEGACION -->
        <div class="barra">
            <div class="contenedor clearfix">
                <div class="logo">
                    <a href="index.php">
                        <img src="img/logo-samaria.png" alt="logo samaria">
                    </a>
                </div>
                <div class="nombre-logo">
                    <h4>IGLESIA SAMARIA</h4>
                </div>

                <div class="menu-movil">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="navegacion-principal">
                    <a href="index.php">Inicio</a>
                    <a href="calendario.php">Programación</a>
                    <a href="galeria.php">Galería</a>
                    <a href="contactos.php">Contactos</a>
                    <a href="registro.php">Reservaciones</a>
                </nav>
            </div><!-- contenedor -->
        </div><!-- Barra -->