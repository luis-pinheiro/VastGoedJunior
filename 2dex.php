<?php 
/** 
 * @package Vastgoedjunior 
 * @subpackage tpl_vastgoedjunior 
 * @author <>
 * @copyright Copyright (C) . All rights reserved. 
 * @license GNU 
 */ 

// No direct access. 
defined('_JEXEC') or die; 

// Define Variables 
$path = $this->baseurl . '/templates/' . $this->template; 
$app = JFactory::getApplication(); 
$doc = JFactory::getDocument();

// Add Styles


// Add Scripts
    
   $doc->addScript('templates/'.$this->template.'/scripts/jquery.min.js');
   $doc->addScript('templates/'.$this->template.'/scripts/modernizr.js');
   $doc->addScript('templates/'.$this->template.'/scripts/bootstrap.min.js');
   $doc->addScript('templates/'.$this->template.'/scripts/jquery.scrollTo.js');
   $doc->addScript('templates/'.$this->template.'/scripts/jquery.nav.js');
   $doc->addScript('templates/'.$this->template.'/scripts/jquery.lazyloadxt.min.js');
   $doc->addScript('templates/'.$this->template.'/scripts/main.js');
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php echo $this->language ?>" dir="<?php echo $this->direction ?>">
<!--<![endif]-->

<head>
    <jdoc:include type="head" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- less -->
    <!-- <link rel="stylesheet/less" type="text/css" href="styles/lesshat-prefixed.less"> -->
    <!-- <link rel="stylesheet/less" type="text/css" href="styles/sprite-3.less"> -->
    <!-- <link rel="stylesheet/less" type="text/css" href="styles/main2.less" /> -->
    <!-- <script src="less.js" type="text/javascript"></script> -->

    <!-- build:css css/tidy.css -->
    <!-- <link rel="stylesheet" href="styles/main3.css"> -->
    <!-- <link rel="stylesheet" href="styles/navigation.css"> -->
    <link rel="stylesheet" href="<?php echo $path ?>/styles/main2.css">
    <link rel="stylesheet" href="<?php echo $path ?>/styles/sprite-3.css">
    <link rel="stylesheet" href="<?php echo $path ?>/styles/ihover2.css">
    <link rel="stylesheet" href="<?php echo $path ?>/styles/animate.css">
    <link rel="stylesheet" href="<?php echo $path ?>/styles/jquery.lazyloadxt.fadein.css">
    <!-- endbuild -->

    <!-- <script src="<?php echo $path ?>/scripts/modernizr.js"></script> -->

    <!-- fonts -->
    <!-- <link href="fonts/Bellota-Light.otf" rel="stylesheet" type="text/css"> -->
    <link href="http://fonts.googleapis.com/css?family=Lato:400,100,300,700,900" rel="stylesheet" type="text/css">
    <!-- /.fonts -->
</head>

<body id="home" data-spy="scroll" data-target="#navbar">

    <div id="navbar" class="haha navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /.button -->
                <jdoc:include type="modules" name="vgj-logo" style="xhtml" />
                <!-- // -->
                  

                <!-- // -->
            </div>

            <!-- /.nabbar-header -->
            <div id="navparent" class="collapse navbar-collapse">
                <!-- <h4><?php echo $path ?>/</h4> -->
                <jdoc:include type="modules" name="vgj-main-1-menu" style="xhtml" />
                <!-- <jdoc:include type="modules" name="vgj-menu" style="xhtml" /> -->
            </div>
            <!--/.nav-collapse -->
        </div>
        <!-- /.container -->

       



    </div>
    <!-- /.navbar -->


<div class="modal" id="myModal">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3>Modal header</h3>
    </div>
    <div class="modal-body">
       <div>
           <pre>
               <?php var_dump($this) ?>
           </pre>
       </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn btn-primary">Save changes</a>
        <a href="#" class="btn">Close</a>
    </div>
</div>

    <section id="vastgoedjunior-background">
        <div data-stellar-background-ratio="0.5" class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <jdoc:include type="modules" name="vgj-welkom-text" style="xhtml" />
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <jdoc:include type="modules" name="btn-reg" style="xhtml" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <jdoc:include type="modules" name="btn-lees-meer" style="xhtml" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /#vastgoedjunior-background -->

    <section id="search">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                <jdoc:include type="component" name="vgj-search" style="" />
                <!-- Search -->
                  <!--   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type hier uw zoekopdracht">
                        <span class="input-group-btn">
                            <button class="btn" type="button"><i class="sprite sprite-glyphicons_027_search"></i>
                            </button>
                        </span>
                    </div> -->
                    <!-- /Search -->
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-md-6 col-xs-6 hidden-sm hidden-xs">
                    <div class="row">
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-1 col-sm-1">
                        </div>

                        <!-- Linkedin -->
                        <div class="col-md-1 col-sm-1">
                            <jdoc:include type="modules" name="btn-link-1" style="xhtml" />
                        </div>

                        <!-- Twitter -->
                        <div class="col-md-1 col-sm-1">
                            <jdoc:include type="modules" name="btn-tw-1" style="xhtml" />

                        </div>

                        <div class="col-md-1"></div>
                    </div>

                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- /#search -->

    <section id="waarom-vastgoed">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 waarom-vgv">
                    <jdoc:include type="modules" name="vgj-Waarom" style="xhtml" />

                </div>
                <div class="col-lg-6 waarom-vgv">
                    <jdoc:include type="modules" name="vgj-waarom-dit" style="xhtml" />

                </div>
            </div>
        </div>
    </section>
    <!-- /#waarom-vastgoed -->

    <section id="wat-is-onze-formule">
        <div class="container-fluid">
            <div class="row">
                <div id="b-b" class="col-lg-9">
                    <div>
                        <jdoc:include type="modules" name="vgj-formule" style="xhtml" />
                    </div>
                    <!-- /#wat-is-onze-formule -->
                </div>
                <div class="col-lg-3">
                    <div id="nieuws">
                        <jdoc:include type="modules" name="vgj-nieuws" style="xhtml" />
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

        <!-- Nieuws Modal -->
        <div class="modal fade" id="Nieuws-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <jdoc:include type="modules" name="vgj-nieuws-modal" style="xhtml" />
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- /.Nieuws Modal -->
    </section>
    <!-- /.wat-is-onze-formule -->

    <section id="hoe-werkt-vastgoedjunior">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div>
                        <jdoc:include type="modules" name="vgj-hoe-werkt" style="xhtml" />
                    </div>
                </div>
                <!-- /.col-md-9 -->
                <div class="col-lg-3">
                    <div id="download-flyer">
                        <div class="row">
                            <jdoc:include type="modules" name="vgj-down-flyer" style="xhtml" />
                        </div>
                    </div>
                    <!-- /.flyer -->
                    <div class="row">
                        <div id="vraag">
                            <jdoc:include type="modules" name="vgj-vraag" style="xhtml" />
                        </div>
                        <!-- /.vraag -->
                    </div>
                    <div class="row">
                        <div id="junior">
                            <!-- Nota: Deze wordt nu gewoon uit -->
                            <!-- <h6 class="text-left">Junior zoekt</h6>
                        <h6 class="text-center">Vastgoedjunior is opzoek naar:</h6>
                        <p class="text-center">
                            Maatschappelijk vastgoed Project manager Bouw manager</p>
                        <button type="button" class="btn btn-primary">meer</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.hoe-werkt-vastgoedjunior -->

    <!-- ================================================================== Wie zijn wij
===================================================================================== -->
    <section id="wie-zijn-wij">
        <div class="container-fluid">
            <jdoc:include type="modules" name="vgj-wzw" style="xhtml" />
            <div class="row">
                <!-- Jose -->
                <div class="col-lg-4">
                    <jdoc:include type="modules" name="vgj-wzw-1" style="xhtml" />
                </div>
                <!-- /.Jose -->
                <!-- Frederik -->
                <div class="col-lg-4">
                    <jdoc:include type="modules" name="vgj-wzw-2" style="xhtml" />
                </div>
                <!-- /.Frederik -->
                <!-- Marieke -->
                <div class="col-lg-4">
                    <jdoc:include type="modules" name="vgj-wzw-3" style="xhtml" />
                </div>
                <!-- /.Marieke -->
            </div>
            <!-- /.row -->
            <div class="row">
                <!-- Jurgen -->
                <div class="col-lg-4">
                    <jdoc:include type="modules" name="vgj-wzw-4" style="xhtml" />
                </div>
                <!-- /.Jurgen -->
                <!-- Puck -->
                <div id="coach-puck" class="col-lg-4">
                    <jdoc:include type="modules" name="vgj-wzw-5" style="xhtml" />
                </div>
                <!-- /.Puck -->
                <!-- Patrick -->
                <div class="col-lg-4">
                    <jdoc:include type="modules" name="vgj-wzw-6" style="xhtml" />
                </div>
                <!-- /.Patrick -->
            </div>
        </div>
    </section>
    <!-- /.wie-zijn-wij -->

    <section id="orange">
        <div class="container-fluid">
            <div id="limited" class="row">
                <jdoc:include type="modules" name="vgj-orange" style="xhtml" />
            </div>
        </div>
    </section>
    <!-- /.orange -->

    <!-- ======================================== Referenties
============================================================== -->
    <section id="referenties">
        <div class="container-fluid">
            <jdoc:include type="modules" name="vgj-ref" style="xhtml" />
            <div id="referentie" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#referentie" data-slide-to="0" class="active"></li>
                    <li data-target="#referentie" data-slide-to="1"></li>
                    <li data-target="#referentie" data-slide-to="2"></li>
                    <li data-target="#referentie" data-slide-to="3"></li>
                    <li data-target="#referentie" data-slide-to="4"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                    	<jdoc:include type="modules" name="vgj-item-1" style="xhtml" />
                    </div>
                    <div class="item">
                    <jdoc:include type="modules" name="vgj-item-2" style="xhtml" />
                    </div>
                    <div class="item">
                    <jdoc:include type="modules" name="vgj-item-3" style="xhtml" />
                    </div>
                    <div class="item">
                    <jdoc:include type="modules" name="vgj-item-4" style="xhtml" />
                    </div>
                    <div class="item">
                    <jdoc:include type="modules" name="vgj-item-5" style="xhtml" />
                    </div>
                </div>
            </div>
            <!-- /..slider -->
        </div>
    </section>
    <!-- /.referenties -->

    <!-- ========================================= Registreren
================================================================= -->
    <section id="registreren">
        <div class="container">
            <div class="row">
            <jdoc:include type="modules" name="vgj-registreren" style="xhtml" />
                  <div class="col-md-6 col-sm-6">
                  <jdoc:include type="modules" name="vgj-reg-btn-stud" style="xhtml" />
                    <!-- Modal -->
                    <div class="modal fade" id="student-mod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <jdoc:include type="modules" name="vgj-reg-stud-mod" style="xhtml" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- =============================================== Bedrijven
           ==================================================================== -->
                <div class="col-md-6 col-sm-6">
                <jdoc:include type="modules" name="vgj-reg-btn-bedrijf" style="xhtml" />
                    <!-- Modal -->
                    <div class="modal fade" id="Bedrifv-nod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <jdoc:include type="modules" name="vgj-reg-bedrijf-mod" style="xhtml" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Registreren -->


    <!-- ======================================================================== Contact
========================================================================================= -->
    <section id="contact">
        <div class="container">
            <div class="row">
            <jdoc:include type="modules" name="vgj-footer-contact" style="xhtml" />
            </div>
        </div>
    </section>
    <!-- /.Contact -->

    <!-- Contact Modal -->
    <div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- <jdoc:include type="modules" name="vgj-cont-mod" style="xhtml" /> -->
            <jdoc:include type="component" />
            </div>
            <!--/ .modal-content -->
        </div>
        <!--/ .modal-dialog -->
    </div>
    <!--/ END Contact Modal -->


    <!-- ========================================================== Modal Login -->
    <div class="modal fade" id="modal-login">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- <jdoc:include type="modules" name="vgj-login-mod" style="xhtml" /> -->
            <jdoc:include type="component" />
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- /.Modal Login -->

    <!-- ============================================= Footer
        ============================================================ -->
    <footer class="container-fluid">
        <div class="row">
            <footer>
            <jdoc:include type="modules" name="vgj-footer" style="xhtml" />
            </footer>
        </div>
        <div id="devs">
            <span>
                <a href="http://profitcreations.net/" target="_blank">Coded by ProfitCreations
                </a>
            </span>
            <span>
                <a href="http://jjdesign.profitcreations.net" target="_blank">Design by JJDesign
                </a>
            </span>
            <span>&copy;
                <?php echo date( 'Y') ?>
                <?php echo $app->getCfg('sitename') ?>. All Rights Reserved.</span>
        </div>
    </footer>
    </div>
    <!-- /Contents -->


    <!-- ======================================================================== Contact 
========================================================================================= -->
    <section id="contact">
        <div class="container">

            <div class="row">
                <h2 class="text-center">Contact
                </h2>
                <div class="col-md-6 col-sm-6">
                    <img data-src="img/LogoFooter.png" class="img-responsive lazy-hidden fadeInDownBig" alt="logo-vastgoedjunior">
                </div>
                <div class="col-md-6 col-sm-6">
                    <address>
                        <a href="mailto:info@vastgoedjunior.nl" target="_blank"><i class="glyphicon glyphicon-envelope"></i>info@vastgoedjunior.nl</a>
                        <br />

                        <p><i class="glyphicon glyphicon-earphone"></i><a href="tel:06 37 42 35 43" target="_blank">06 37 42 35 43</a> (<a class="co-p" href="#coach-puck">Puck Loevendie</a>), of bel één van de andere coaches (zie contactgegevens bij ‘ <a class="cnt-wzw" href="#wie-zijn-wij">Wie zijn wij?</a>’).</p>
                        <br />

                        <p><i class="glyphicon glyphicon-road"></i>Burgemeester van Meursstraat 27, 5037 NE Tilburg</p>
                        <br />

                    </address>

                </div>
            </div>
        </div>
    </section>
    <!-- /.Contact -->

    <!-- Contact Modal -->

  <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#hahaha-cont">
                      Launch demo modal
                    </a>


    <div id="hahaha-cont" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-label">Contact Ons</h4>
                </div>
                <!--/ .modal-header -->
                <div class="modal-body contact-form-container">
                   
<!-- Contact Section -->
<div id="contact" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Get in Touch</h2>
                <h3 class="title-description">We’re currently accepting new client projects. We look forward to serving you.</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- Contact Form -->
    <div class="row">
        <div class="span9">
        
            <form id="contact-form" class="contact-form" action="contact.php">
                <p class="contact-name">
                    <input id="contact_name" type="text" placeholder="Full Name" value="" name="name" />
                </p>
                <p class="contact-email">
                    <input id="contact_email" type="text" placeholder="Email Address" value="" name="email" />
                </p>
                <p class="contact-message">
                    <textarea id="contact_message" placeholder="Your Message" name="message" rows="15" cols="40"></textarea>
                </p>
                <p class="contact-submit">
                    <a id="contact-submit" class="submit" type="submit" href="#">Send Your Email</a>
                </p>
                
                <div id="response">
                
                </div>
            </form>
         
        </div>
        
        <div class="span3">
            <div class="contact-details">
                <h3>Contact Details</h3>
                <ul>
                
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->

                </div>
                <!--/ .modal-body -->
            </div>
            <!--/ .modal-content -->
        </div>
        <!--/ .modal-dialog -->
    </div>
    <!--/ END Contact Modal -->


    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
   <!--  <script type="text/javascript" src="<?php echo $path ?>/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $path ?>/scripts/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="<?php echo $path ?>/scripts/jquery.nav.js"></script>
    <script type="text/javascript" src="<?php echo $path ?>/scripts/jquery.lazyloadxt.min.js"></script>
    <script type="text/javascript" src="<?php echo $path ?>/scripts/main.js"></script> -->

    <?php
        $document = JFactory::getDocument();
        $document->addScriptDeclaration('
          
        ');
    ?>

    <!--  <script type="text/javascript" src="scripts/meny.js"></script>
   <script>
    var meny = Meny.create({
    // The element that will be animated in from off screen
    menuElement: document.querySelector( '.meny' ),

    // The contents that gets pushed aside while Meny is active
    contentsElement: document.querySelector( '.contents' ),

    // The alignment of the menu (top/right/bottom/left)
    position: 'left',

    // The height of the menu (when using top/bottom position)
    height: 200,

    // The width of the menu (when using left/right position)
    width: 260,

    // The angle at which the contents will rotate to.
    angle: 15,

    // The mouse distance from menu position which can trigger menu to open.
    threshold: 40,

    // Width(in px) of the thin line you see on screen when menu is in closed position.
    overlap: 2,

    // The total time taken by menu animation.
    transitionDuration: '0.5s',

    // Transition style for menu animations
    transitionEasing: 'ease',

    // Gradient overlay for the contents
    gradient: 'rgba(0,0,0,0.20) 0%, rgba(0,0,0,0.65) 100%)',

    // Use mouse movement to automatically open/close
    mouse: true,

    // Use touch swipe events to open/close
    touch: true
});
   </script> -->

    <!--    <script>
            $('#jsi-nav').sidebar({
                trigger: '.jsc-sidebar-trigger',
                scrollbarDisplay: true,
                pushCb: function () { console.log('push'); },
                pullCb: function () { console.log('pull'); }
            });

            $('#api-pull').on('click', function (e) {
                e.preventDefault();
                $('#jsi-nav').data('sidebar').push();
            });
            $('#api-push').on('click', function (e) {
                e.preventDefault();
                $('#jsi-nav').data('sidebar').pull();
            });
        </script> -->

 <script>
             var _gaq = [
                    ['_setAccount', 'UA-XXXXX-X'],
                    ['_trackPageview']
                ];
                (function(d, t) {
                    var g = d.createElement(t),
                        s = d.getElementsByTagName(t)[0];
                    g.src = '//www.google-analytics.com/ga.js';
                    s.parentNode.insertBefore(g, s)
                }(document, 'script'));
           </script>

    
    <script>
   
    </script> 


    <!--[if lt IE 7]>
      <p class="chromeframe ">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/ ">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true ">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
</body>

</html>
