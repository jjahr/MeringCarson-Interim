<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js <?php
            if( $PAGE_CLASS != "" ) {
                echo $PAGE_CLASS;
            }
        ?>"> <!--<![endif]-->

<?php

// Variables
$PAGE_TITLE_BASE = "MeringCarson";
$PAGE_TITLE; // Title for <H1> and <title>
$PAGE_IS_INDEX; // if false, then the header shows the small logo.
$PAGE_BODYID; // id attribute to put on body
$PAGE_DESCRIPTION; // 
$PAGE_DESCRIPTION_DEFAULT = "MeringCarson is a full-service advertising agency offering strategic planning, creative development, interactive and media buying services and specializes in serving the advertising needs of California businesses. The agency owns offices in Sacramento and Encinitas, California, and caters to clients in such industries as travel and tourism, consumer goods, entertainment, financial services, and health care.";
?>



    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?php 
                $TITLE_STRING = $PAGE_TITLE_BASE;
                if( $PAGE_TITLE != "" ) {
                    $TITLE_STRING .= " › " . $PAGE_TITLE;
                }
                echo $TITLE_STRING;
            ?>
        </title>

        <?php
            // Begin Meta Description (Google Search Result)
            echo '<meta name="Description" content=';

            if( $PAGE_DESCRIPTION == "" ) {
                $PAGE_DESCRIPTION = $PAGE_DESCRIPTION_DEFAULT;
            }
            echo '"' . $PAGE_DESCRIPTION . '"';
            echo '>';
            // End Meta Description
        ?>


        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <div id="topnav" class="row utilities hide-for-small">
            <div class="twelve columns">
                <ul>
                    <li class="emceeLink"><a href="http://designemcee.com/" onClick="trackOutboundLink(this,'Header','Emcee Design'); return false;" target="_blank" title="Visit our partners at Emcee Design"></a></li>
                    <li class="homeDiv
                    <?php
                        if( $PAGE_IS_INDEX == true ) {
                            echo( ' active' );
                        }
                    ?>
                    "><a href="index.php" onClick="trackOutboundLink(this,'Header','Home'); return false;" alt="Home">Home</a></li>
                    <li class="careersDiv
                    <?php
                        if( $PAGE_TITLE == "Careers" ) {
                            echo( ' active' );
                        }
                    ?>
                    "><a href="careers.php" onClick="trackOutboundLink(this,'Header','Careers'); return false;" alt="Careers">Careers</a></li>
                    <!--<li class="servicesDiv"><a href="#" alt="Services">Services</a></li>-->
                    <li class="contactDiv"><a href="#" onClick="_gaq.push(['_trackEvent', 'Header', 'Contact', '']);" title="Contact">Contact <i class="icon-down-dir" style="font-size:0.8em;"></i></a></li>
                    <li class="social">
                        <a target="_blank" href="http://twitter.com/meringcarson" onClick="trackOutboundLink(this,'Header','Twitter'); return false;" alt="@meringcarson on Twitter"><img src="img/social-tw.png" alt="Twitter"></a>&nbsp;
                        <a target="_blank" href="http://www.linkedin.com/company/meringcarson" onClick="trackOutboundLink(this,'Header','Linkedin'); return false;" alt="MeringCarson on Linkedin"><img src="img/social-in.png" alt="Linkedin"></a>&nbsp;
                        <a target="_blank" href="http://www.facebook.com/MeringCarson" onClick="trackOutboundLink(this,'Header','Facebook'); return false;" alt="@meringcarson on Facebook"><img src="img/social-fb.png" alt="Facebook"></a></li>


                </ul>
            </div>
        </div>
        <div class="utilities contact" id="contactDiv" style="height:auto;">
                <div class="row" style="padding: 16px 0 6px 28px; margin: 0 0 0 auto;">
                    <div class="three columns hide-for-small"></div>
                    <div class="three columns">
                        <em><i class="icon-mail-alt"></i>Email</em><br>
                        <a href="mailto:info@meringcarson.com">info@meringcarson.com</a>
                    </div>
                    <div class="three columns">
                        <em><i class="icon-flag"></i>Nor Cal</em><br>
                        1700 I St<br>
                        Suite 210<br>
                        Sacramento, CA 95811<br>
                        Phone (916) 441-0571<br>
                        Fax (916) 441-1370
                    </div>
                    <div class="three columns">
                        <em><i class="icon-flag"></i>So Cal</em><br>
                        624 Broadway<br>
                        Suite 502<br>
                        San Diego, Ca. 92101<br>
                        Phone (760) 635-2100<br>
                        Fax (760) 635-2106
                    </div>
                </div>
            </div>