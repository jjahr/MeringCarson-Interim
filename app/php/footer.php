        <div id="footer">
            <div class="copyright">&copy; 2014 MeringCarson</div>
        </div>
        </div> <!-- end #container -->

        <!-- build:js js/vendor/jquery.min.js -->
        <script src="<?php echo $ROOT ?>bower_components/jquery/jquery.min.js"></script>
        <!-- endbuild -->
        <!-- build:js js/foundation/foundation.min.js -->
        <script src="<?php echo $ROOT ?>bower_components/foundation/js/foundation.min.js"></script>
        <!-- endbuild -->
        <script src="<?php echo $ROOT ?>js/plugins.js"></script>
        <script src="<?php echo $ROOT ?>js/app.js"></script>
        <?php
            if( $JS != "" ) {
                foreach($JS as $val) {
                    echo( '<script src="' . $ROOT . 'js/' . $val . '"></script>' );
                }
            }
        ?>


    </body>
</html>
