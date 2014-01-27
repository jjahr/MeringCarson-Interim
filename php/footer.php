        <div id="footer">
            <div class="copyright">&copy; 2014 MeringCarson</div>
        </div>
        </div> <!-- end #container -->


        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?php echo $ROOT ?>js/plugins.js"></script>
        <script src="<?php echo $ROOT ?>js/main.js"></script>
        <?php
            if( $JS != "" ) {
                foreach($JS as $val) {
                    echo( '<script src="' . $ROOT . 'js/' . $val . '"></script>' );
                }
            }
        ?>


    </body>
</html>
