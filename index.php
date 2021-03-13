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
    
   // $doc->addScript('templates/'.$this->template.'/scripts/jquery.min.js');
   // $doc->addScript('templates/'.$this->template.'/scripts/modernizr.js');
   // $doc->addScript('templates/'.$this->template.'/scripts/bootstrap.min.js');
   // $doc->addScript('templates/'.$this->template.'/scripts/jquery.scrollTo.js');
   // $doc->addScript('templates/'.$this->template.'/scripts/jquery.nav.js');
   // $doc->addScript('templates/'.$this->template.'/scripts/jquery.lazyloadxt.min.js');
   // $doc->addScript('templates/'.$this->template.'/scripts/main.js');
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
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- less -->
    <!-- <link rel="stylesheet/less" type="text/css" href="styles/lesshat-prefixed.less"> -->
    <!-- <link rel="stylesheet/less" type="text/css" href="styles/sprite-3.less"> -->
    <!-- <link rel="stylesheet/less" type="text/css" href="styles/main2.less" /> -->
    <!-- <script src="<?php echo $path ?>less.js" type="text/javascript"></script> -->

    <!-- build:css css/tidy.css -->
    <!-- <link rel="stylesheet" href="styles/main3.css"> -->
    <!-- <link rel="stylesheet" href="styles/navigation.css"> -->
    <link rel="stylesheet" href="<?php echo $path ?>/styles/main2.css">
    <link rel="stylesheet" href="<?php echo $path ?>/styles/sprite-3.css">
    <link rel="stylesheet" href="<?php echo $path ?>/styles/ihover2.css">
    <link rel="stylesheet" href="<?php echo $path ?>/styles/animate.css">
    <link rel="stylesheet" href="<?php echo $path ?>/styles/jquery.lazyloadxt.fadein.css">
    <!-- <link rel="stylesheet" href="styles/sidebar.css"> -->
    <!-- /build -->

    <!-- build:js scripts/vendor/modernizr.js -->
    <script src="<?php echo $path ?>/scripts/modernizr.js"></script>
    <!-- endbuild -->

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
                <!-- Logo -->
                <jdoc:include type="modules" name="position-0" style="logo" />
              <!--   <a id="logod" class="navbar-brand sprite sprite-Vector-Smart-Object" href="#">
                </a> -->
            </div>
            <!-- /.nabbar-header -->
            <div id="navparent" class="collapse navbar-collapse">
                <ul class="nav navbar-nav haha ha-nav" data-spy="affix">
                <jdoc:include type="modules" name="position-1" style="navbar" />
                    <!-- <li class="active"><a href="#waarom-vastgoed" class="nav-link">Waarom</a>
                    </li>
                    <li><a href="#hoe-werkt-vastgoedjunior" class="nav-link">Hoe</a>
                    </li>
                    <li><a href="#wie-zijn-wij" class="nav-link">Wie</a>
                    </li>
                    <li><a href="#vraag" class="nav-link">Vraag&aanbod</a>
                    </li>
                    <li><a href="#referenties" class="nav-link">Referenties</a>
                    </li>
                    <li><a href="#contactModal" class="unscroll" data-toggle="modal">Contact</a>
                    </li>
                    <li>
                        <a data-toggle="modal" class="unscroll" href="#modal-login" title="login"><i class="glyphicon glyphicon-log-in"></i></a>

                    </li> -->
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
        <!-- /.container -->

    </div>
    <!-- /.navbar -->
    <section id="vastgoedjunior-background">
        <div class="container-fluid" data-stellar-background-ratio="0.5">
            <div class="row">
                <div class="col-md-12">
                <jdoc:include type="modules" name="position-2" style="none" />
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <jdoc:include type="modules" name="position-3" style="btn_reg" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <jdoc:include type="modules" name="vgj-btn-meer" style="btn_meer" />
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
                <jdoc:include type="modules" name="vgj-zoeken" />
                    <!-- <div class="input-group"> -->
                       <!--  <input type="text" class="form-control" placeholder="Type hier uw zoekopdracht">
                        <span class="input-group-btn">
                            <button class="btn" type="button"><i class="sprite sprite-glyphicons_027_search"></i>
                            </button>
                        </span> -->
                    <!-- </div> -->
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
                        <jdoc:include type="modules" name="vgj-in-1" style="linkedin" />
                        </div>
                        <!-- Twitter -->
                        <div class="col-md-1 col-sm-1">
                        <jdoc:include type="modules" name="vgj-tw-1" style="twitter" />
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
                <jdoc:include type="modules" name="vgj-waarom-1" style="waarom" />
                </div>
                <div class="col-lg-6 waarom-vgv">
                <jdoc:include type="modules" name="vgj-waarom-2" style="waarom" />
                </div>
            </div>
        </div>
    </section>
    <!-- /#waarom-vastgoed -->

    <section id="wat-is-onze-formule">
        <div class="container-fluid">
            <div class="row">
                <div id="b-b" class="col-lg-9">
                    <jdoc:include type="modules" name="vgj-formule" style="formule" />
                        <div id="onze-f">
                        <jdoc:include type="modules" name="vgj-formule-img" style="none" />
                        </div>
                    <!-- /#wat-is-onze-formule -->
                </div>
                <div class="col-lg-3">
                    <div id="nieuws">
                    <jdoc:include type="modules" name="vgj-nieuws-header" style="nieuws_header" />
                    <div class="branch-nw">
                       <jdoc:include type="modules" name="vgj-nieuws-1" style="nieuws" />
                    </div>
                    <div class="branch-nw">
                     <jdoc:include type="modules" name="vgj-nieuws-2" style="nieuws" />
                    </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

        <!-- Nieuws Modal -->

        <div class="modal fade" id="Nieuws-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                         <jdoc:include type="modules" name="vgj-nieuws-header-modal" style="nieuws_header_mod" />
                    </div>
                    <div class="modal-body">
                    <jdoc:include type="modules" name="vgj-nieuws-mod-1" style="nieuws_mod" />
                    <jdoc:include type="modules" name="vgj-nieuws-mod-2" style="nieuws_mod" />
                    </div>
                    <!-- /.body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
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
      <jdoc:include type="modules" name="vgj-hoe" style="none" />
    </section>
    <!-- /.hoe-werkt-vastgoedjunior -->

    <!-- ================================================================== Wie zijn wij
===================================================================================== -->
    <section id="wie-zijn-wij">
    <jdoc:include type="modules" name="vgj-wzw" style="none" />
        
    </section>
    <!-- /.wie-zijn-wij -->

    <section id="orange">
    <jdoc:include type="modules" name="vgj-oranje" style="none" />
        
    </section>
    <!-- /.orange -->

    <!-- ======================================== Referenties
============================================================== -->

    <section id="referenties">
    <jdoc:include type="modules" name="vgj-ref" style="none" />
       
    </section>
    <!-- /.referenties -->

    <!-- ========================================= Registreren
================================================================= -->
    <section id="registreren">
    <jdoc:include type="modules" name="vgj-reg" style="none" />
        
    </section>

    <!-- /.Registreren -->


    <!-- ======================================================================== Contact
========================================================================================= -->
    <section id="contact">
    <jdoc:include type="modules" name="vgj-contact" style="none" />
        
    </section>
    <!-- /.Contact -->

    <!-- Contact Modal -->
    <jdoc:include type="modules" name="vgj-cont-modal" style="none" />
    
    <!--/ END Contact Modal -->


    <!-- ========================================================== Modal Login -->
<jdoc:include type="modules" name="vgj-login-mod" style="none" />
    
    <!-- /.modal -->
    <!-- /.Modal Login -->






    <!-- ============================================= Footer
        ============================================================ -->
    <footer class="container-fluid">
    <jdoc:include type="modules" name="vgj-footer" style="none" />

       
    </footer>
    </div>
    <!-- /Contents -->

    <script type="text/javascript" src="<?php echo $path ?>/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $path ?>/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $path ?>/scripts/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="<?php echo $path ?>/scripts/jquery.nav.js"></script>
    <script type="text/javascript" src="<?php echo $path ?>/scripts/jquery.lazyloadxt.min.js"></script>
    <script type="text/javascript" src="<?php echo $path ?>/scripts/main.js"></script>

    <!--  <script type="text/javascript" src="<?php echo $path ?>scripts/meny.js"></script>
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



    <!--
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
    </script> -->


    <!--[if lt IE 7]>
      <p class="chromeframe ">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/ ">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true ">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
</body>

</html>
