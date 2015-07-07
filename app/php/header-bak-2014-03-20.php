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
$PAGE_TITLE_DEFAULT = "MeringCarson is a full-service advertising agency offering strategic planning, creative development and interactive and media buying services";
$PAGE_IS_INDEX; // if false, then the header shows the small logo.
$PAGE_BODYID; // id attribute to put on body
$PAGE_DESCRIPTION; // 
$PAGE_DESCRIPTION_DEFAULT = "MeringCarson is a full-service advertising agency offering strategic planning, creative development, interactive and media buying services and specializes in serving the advertising needs of California businesses. The agency owns offices in Sacramento and Encinitas, California, and caters to clients in such industries as travel and tourism, consumer goods, entertainment, financial services, and health care.";

$ROOT; // path to root
if( !$ROOT) {
    $ROOT = "";
}
?>



    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?php 
                if( $PAGE_TITLE != "" ) {
                    $TITLE_STRING .= $PAGE_TITLE;
                } else {
                    $TITLE_STRING = $PAGE_TITLE_DEFAULT;
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

        <meta name="description" content="MeringCarson is a full-service advertising agency offering strategic planning, creative development, interactive and media buying services and specializes in serving the advertising needs of California businesses. Counting San Diego Convention & Visitors Bureau, California Raisins, and the California Tourism Board among its clients, the agency owns offices in Sacramento and Encinitas, California. It caters to clients in such industries as travel and tourism, consumer goods, entertainment, financial services, and health care.">
        <meta name="keywords" content="advertising, marketing, identity, branding, television, radio, print, interactive, agency ">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo $ROOT ?>css/app.css">

        <!-- build:js js/vendor/modernizr.js -->
        <script src="<?php echo $ROOT ?>bower_components/modernizr/modernizr.js"></script>
        <!-- endbuild -->
    </head>
    <body class="">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <div id="topnav">
            <ul class="logo">
                <li><a href="<?php echo $ROOT ?>#" onClick="_gaq.push(['_trackEvent', 'Header', 'Menu Button (mobile)', '']);" class="img menuButton"></a></li>
                <li><a href="<?php echo $ROOT ?>#" onClick="_gaq.push(['_trackEvent', 'Header', 'Home (Logo)', '']);" class="img mc"></a></li>
            </ul>
            <div class="menu">
                <ul class="pages">
                    <li class="
                        <?php
                            if( $PAGE_CLASS == "home" ) {
                                echo( ' active' );
                            }
                        ?>
                    "><a href="<?php echo $ROOT ?>#" onClick="_gaq.push(['_trackEvent', 'Header', 'Home (Text Link)', '']);" class="">Home</a></li>
                    <li class="contactDiv 
                        <?php
                            if( $PAGE_CLASS == "contact" ) {
                                echo( ' active' );
                            }
                        ?>
                    "><a href="
                        <?php
                            if( $PAGE_CLASS == "contact" ) {
                                echo( '#' );
                            } else {
                                echo( $ROOT . 'contact');
                            }
                        ?>" class="">Contact</a></li>
                    <li class="careersDiv 
                        <?php
                            if( $PAGE_CLASS == "careers" ) {
                                echo( ' active' );
                            }
                        ?>
                    "><a href="
                        <?php
                            if( $PAGE_CLASS == "careers" ) {
                                echo( '#' );
                            } else {
                                echo( $ROOT . 'careers');
                            }
                        ?>" class="
                    ">Careers</a></li>
                </ul>
                <div class="more">
                    <ul class="sister-sites">
                        <li><a href="http://www.designemcee.com" onClick="trackOutboundLink(this,'Header','Emcee Design'); return false;" target="_blank" class="emcee img" alt="Emcee Design"></a></li>
                        <?php //<li><a href="http://move.meringcarson.com" onClick="trackOutboundLink(this,'Header','Blog'); return false;" class="blog img" alt="MeringCarson Blog"><span>Blog</span></a></li> ?>
                    </ul>
                    <ul class="social">
                        <li><a href="http://www.youtube.com/meringcarson" onClick="trackOutboundLink(this,'Header','Youtube'); return false;" target="_blank" class="youtube img" alt="MeringCarson on Youtube"></a></li>
                        <li><a href="http://www.twitter.com/meringcarson" onClick="trackOutboundLink(this,'Header','Twitter'); return false;" target="_blank" class="twitter img" alt="Follow MeringCarson on Twitter"></a></li>
                        <li><a href="http://www.linkedin.com/company/meringcarson" onClick="trackOutboundLink(this,'Header','Linkedin'); return false;" target="_blank" class="linkedin img" alt="MeringCarson on Linkedin"></a></li>
                        <li><a href="http://www.facebook.com/MeringCarson" onClick="trackOutboundLink(this,'Header','Facebook'); return false;" target="_blank" class="facebook img" alt="Follow MeringCarson on Facebook"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="container">