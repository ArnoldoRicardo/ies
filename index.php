<?php 
$pagina=$_GET["p"]; 
include("var.php");
?>
<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
  <meta name="google-site-verification" content="oBT-W5Dykz3m7HuWidsdfrwdTcZgLkz6yzBoPcz0Vg0" />
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>iesfrosur</title>
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta property="og:image" content="http://iesfrosur.edu.mx/img/ies.png"/>
  <meta property="og:description" content="Instituto de Estudios Superiores Frontera Sur... comprometidos con la educación."/>
  <!--[if !lte IE 6]><!-->
  <link rel="shortcut icon" href="img/favicon.ico" />
  <link rel="stylesheet" href="css/style.min.css" media="screen" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic" />
  <!--<link rel="stylesheet" href="css/fancybox.min.css" media="screen" />
  <link rel="stylesheet" href="css/video-js.min.css" media="screen" />
  <link rel="stylesheet" href="css/audioplayerv1.min.css" media="screen" />-->
  <!--<![endif]-->
  <!--[if lte IE 6]>
      <link rel="stylesheet" href="//universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
      <![endif]-->
  <!-- HTML5 Shiv + detect touch events -->
  <script src="js/modernizr.custom.js"></script>
  <!-- HTML5 video player -->
  <!--<script src="js/video.min.js"></script>
  <script>_V_.options.flash.swf = 'http://localhost/smartstart/js/video-js.swf';</script>-->
<!--google webmaster-->
<meta name="google-site-verification" content="ksJOA_xRnafrLbcmGT-R-h9zhXe-bt4d-5gL2l4119I" />
<!--end google webmaster-->
</head>
<body>
  <header id="header" class="container clearfix">
    <a href="index.html" id="logo">
      <img src="img/logo.png" alt="IESFROSUR" />
    </a>
    <nav id="main-nav">
    	<?php
    	require_once('menu.php');
    	$menu = new Menu();
    	$menu->printMenu($pagina);
    	?>
    </nav><!-- end #main-nav -->
  </header><!-- end #header -->
  <?php
     if(!($pagina) or $pagina=="index") require_once("views/inicio.php");
    elseif(file_exists("views/".$pagina.".php")) require_once("views/".$pagina.".php");
    else require_once("views/inicio.php");
  ?>
    <footer id="footer" class="clearfix">
      <div class="container">
	<div class="three-fourth">
	  <nav id="footer-nav" class="clearfix">
	    <ul>
	      <li><a href="index.html">Inicio</a></li>
	      <li><a href="doctorados.html">Doctorados</a></li>
	      <li><a href="maestrias.html">Maestr&#205;as</a></li>
	      <li><a href="licenciaturas.html">Licenciaturas</a></li>
	      <li><a href="contacto.html">Contacto</a></li>
	    </ul>
	  </nav><!-- end #footer-nav -->
	  <ul class="contact-info">
	<li class="address"><?php echo $dominio; ?></li>
	<li class="phone"><?php echo $telefono; ?></li>
	    <li class="email"><a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></li>
	  </ul><!-- end .contact-info -->
	</div><!-- end .three-fourth -->
	<div class="one-fourth last">
	  <span class="title">siguenos</span>
	  <ul class="social-links">
	    <li class="twitter"><a href="<?php echo $twitter; ?>">Twitter</a></li>
	    <li class="facebook"><a href="<?php echo $facebook; ?>">Facebook</a></li>
	    <li class="flickr"><a href="<?php echo $flickr; ?>">Flickr</a></li>
	    <!--<li class="vimeo"><a href="#">Vimeo</a></li>-->
	    <!--<li class="youtube"><a href="#">YouTube</a></li>-->
	    <!--<li class="skype"><a href="#">Skype</a></li>-->
	  </ul><!-- end .social-links -->  
	</div><!-- end .one-fourth.last -->
      </div><!-- end .container -->
    </footer><!-- end #footer -->
    <footer id="footer-bottom" class="clearfix">
      <div class="container">
	<ul>
	  <li>universitarios IESFROSUR &copy; 2013</li>
	  <!--	<li><a href="#">Legal Notice</a></li>-->
	  <!--	<li><a href="#">Terms</a></li>-->
	</ul>
      </div><!-- end .container -->
    </footer><!-- end #footer-bottom -->
    <!--[if !lte IE 6]><!-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
    <!--[if lt IE 9]> <script src="js/selectivizr-and-extra-selectors.min.js"></script> <![endif]-->
    <script src="js/respond.min.js"></script>
    <script src="js/jquery.easing-1.3.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.smartStartSlider.min.js"></script>
    <!--<script src="js/jquery.jcarousel.min.js"></script>-->
    <script src="js/jquery.cycle.all.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <!--<script src="js/audioplayerv1.min.js"></script>-->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="js/jquery.gmap.min.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <?php 
      if($pagina=="comalapa") echo '<script src="js/custom-comalapa.min.js"></script>';
      elseif($pagina=="siltepec") echo '<script src="js/custom-siltepec.min.js"></script>';
      elseif($pagina=="motozintla") echo '<script src="js/custom-motozintla.min.js"></script>';
      else echo '<script src="js/custom.min.js"></script>';
?>
    <!--<![endif]-->
  </body>
</html>