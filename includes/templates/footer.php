        <footer class="site-footer">
            <div class="contenedor clearfix">
                <div class="footer-informacion">
                    <h3>Sobre <span>Imparables</span></h3>
                    <p>Esta será tu mejor experiencia, asi que te recomendamos ir con el corazon dispuesto a ser tocado por Dios.</p>
                    <br>
                </div>
                <div class="ultimos-tweets">
                    <h3>Ultimos<span> post  </span></h3>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Figlesiasamariaadp%2F&tabs=timeline&width=300&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
                <div>
                    <h3>Redes <span> Sociales</span></h3>
                    <nav class="redes-sociales">
                        <a href="https://www.facebook.com/iglesiasamariaadp/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=51932486310"><i class="fa fa-whatsapp aria-hidden="true""></i></a>
                        <a href="https://www.youtube.com/channel/UClQqUnhNqlTKZ8_NhjJEPyQ" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </nav>
                </div>
            </div><!-- contenedor-->
            <p class="copyright"> Derechos reservados a Alitev Peru - 932486310 </p>

        </footer><!--footer-->

        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>


        <script src="js/plugins.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>

        <!--Esto se hace para usar algun archivo de script solo en cierta pagina-->
        <?php 
            $archivo = basename($_SERVER['PHP_SELF']);
            $pagina = str_replace(".php", "", $archivo);
            if ($pagina == 'invitados' || $pagina == 'index') {
                echo '<script src="js/jquery.colorbox-min.js"></script>';
                echo '<script src="js/jquery.waypoints.min.js"></script>';
            }else if($pagina=='galeria'){
                echo '<script src="js/lightbox.min.js"></script>';
            }
         ?>

        <script src="js/jquery.lettering.js"></script>
        

        <script src="js/main.js"></script>
        <script src="js/cotizador.js"></script>


        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkbccefDgWy8HV4WLZcnXg2v-askQaY6I&callback=initMap"
        async defer>
        </script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>


