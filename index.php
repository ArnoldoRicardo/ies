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
<!--facebook
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript">
</script>
<script type="text/javascript">
function ClickJackFbHide(){
jQuery("div[id^=\'clickjack-button-wrapper\']").hide();
}
function ClickJackFbShow(){
jQuery("div[id^=\'clickjack-button-wrapper\']").show();
}
</script>
<--facebook end-->
</head>
<body>
  <header id="header" class="container clearfix">
    <a href="index.html" id="logo">
      <img src="img/logo.png" alt="IESFROSUR" />
    </a>
    <nav id="main-nav">
      <ul>
      <?php
	if(!($pagina)) echo '<li class="current">';
	else echo "<li>";
      ?>
	  <a href="index.html" data-description="comienzo">Inicio</a>
	</li>
	<li>
	  <a href="http://blog.iesfrosur.edu.mx/" data-description="día a día">blog</a>
	</li>
	<?php
	if(($pagina=="doctorados") or ($pagina=="doctorado-educacion") or ($pagina=="maestrias") or ($pagina=="maestria-educacion") or ($pagina=="ciencias-penales") or ($pagina=="ciencias-de-la-computacion") or ($pagina=="maestria-administracion")) echo '<li class="current">';
	else echo "<li>";
      ?>
      <a href="#" data-description="Especializate">posgrados</a>
      <ul>
      <?php
	if(($pagina=="doctorados") or ($pagina=="doctorado-educacion")) echo '<li class="current">';
	else echo "<li>";
      ?>
      <a href="doctorados.html" >Doctorados</a>
      <ul>
	<?php 
	  if($pagina=="doctorado-educacion") echo '<li class="current">';
	  else echo "<li>";
	?>
	<a href="doctorado-educacion.html">Educaci&#243;n</a></li>
      </ul>
    </li>
	<?php
	  if(($pagina=="maestrias") or ($pagina=="maestria-educacion") or ($pagina=="ciencias-penales") or ($pagina=="ciencias-de-la-computacion") or ($pagina=="maestria-administracion")) echo '<li class="current">';
	else echo "<li>";
      ?>
	  <a href="maestrias.html" >Maestr&#237;as</a>
	  <ul>
	    <?php
	      if($pagina=="maestria-educacion") echo '<li class="current">';
	      else echo "<li>";
	    ?>
	    <a href="maestria-educacion.html">Educaci&#243;n</a></li>
	    <?php
	      if($pagina=="ciencias-penales") echo '<li class="current">';
	      else echo "<li>";
	    ?>
	    <a href="ciencias-penales.html">Ciencias Penales</a></li>
	    <?php
	      if($pagina=="ciencias-de-la-computacion") echo '<li class="current">';
	      else echo "<li>";
	    ?>
	    <a href="ciencias-de-la-computacion.html">Ciencias de la Computaci&#243;n</a></li>
	    <?php
	      if($pagina=="maestria-administracion") echo '<li class="current">';
	      else echo "<li>";
	    ?>
	    <a href="maestria-administracion.html">Administraci&#243;n</a></li>
	  </ul>
	</li>
      </ul>
    </li>
	<?php
	  if(($pagina=="licenciaturas") or ($pagina=="informatica") or ($pagina=="derecho") or ($pagina=="contaduria") or ($pagina=="administracion")) echo '<li class="current">';
	  else echo "<li>";
      ?>
	  <a href="licenciaturas.html" data-description="Formate como profesionista">Licenciaturas</a>
	  <ul>
	    <?php
	      if($pagina=="informatica") echo '<li class="current">';
	      else echo "<li>";
	    ?>
	  <a href="informatica.html">Inform&#225;tica Administrativa</a></li>
	  <?php
	      if($pagina=="derecho") echo '<li class="current">';
	      else echo "<li>";
	    ?>
	  <a href="derecho.html">Derecho</a></li>
	  <?php
	      if($pagina=="contaduria") echo '<li class="current">';
	      else echo "<li>";
	    ?>
	  <a href="contaduria.html">Contadur&#237;a P&#250;blica</a></li>
	  <?php
	      if($pagina=="administracion") echo '<li class="current">';
	      else echo "<li>";
	    ?>
	  <a href="administracion.html">Administraci&#243;n de Empresas</a></li>
	  </ul>
	</li>
	<?php
	  if(($pagina=="contacto") or ($pagina=="comalapa") or ($pagina=="siltepec") or ($pagina=="motozintla") or ($pagina=="about-us")) echo '<li class="current">';
	  else echo "<li>";
	?>
	<a href="contacto.html" data-description="nuestros datos">Contacto</a>
	  <ul>
	    <?php
	      if($pagina=="comalapa") echo '<li class="current">';
	      else echo "<li>";
	    ?>
	    <a href="comalapa.html">Comalapa</a></li>
	    <?php
	      if($pagina=="siltepec") echo '<li class="current">';
	      else echo "<li>";
	    ?>
	    <a href="siltepec.html">Siltepec</a></li>
 <?php
	      if($pagina=="motozintla") echo '<li class="current">';
	      else echo "<li>";
	    ?>
	    <a href="motozintla.html">Motozintla</a></li>
	    <?php
	      if($pagina=="about-us") echo '<li class="current">';
	      else echo "<li>";
	    ?>
	    <a href="about-us.html">Acerca De</a></li>
	  </ul>
	</li>
      </ul>
    </nav><!-- end #main-nav -->
  </header><!-- end #header -->
  <?php
    if(!($pagina) or $pagina=="index") include("inicio.php");
    elseif(file_exists($pagina.".php")) include($pagina.".php");
    else echo "error 404";
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
<!--facebook
<div id="clickjack-button-wrapper-5" style="position: absolute; opacity: 0; filter: alpha(opacity = 0); -ms-filter:\'progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\';  margin-left: -50px; z-index: 100; width:27px; height:20px; overflow:hidden">
<iframe src="http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/iesfrosur&layout=button_count&show_faces=false&width=50&action=like&colorscheme=light&height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:45px; left:-19px; height:21px; z-index: 0; position: relative;" allowTransparency="true"></iframe>
        </div>
        <script type="text/javascript">
                jQuery( document ).ready( function() {
                         $( "#clickjack-button-wrapper-5" ).parent().mousemove( function( e ) {
                                jQuery( "#clickjack-button-wrapper-5" ).css( {
                                        top: e.pageY - 10,
                                        left: e.pageX + 30
                                } );
                        } );
 
                       clickjack_hider();
                        var clickjack_fb_timer = setTimeout("clickjack_hider()",5000);
                } );
 
                        function clickjack_hider(){
                        jQuery("input").mouseout(function(){ClickJackFbShow();});
                        jQuery("a").mouseout(function(){ClickJackFbShow();});
                        jQuery("button").mouseout(function(){ClickJackFbShow();});
                        jQuery("textarea").mouseout(function(){ClickJackFbShow();});
                        jQuery(".ratingblock").mouseout(function(){ClickJackFbShow();});                        jQuery("object").mouseout(function(){ClickJackFbShow();});
                        jQuery("input").mouseover(function(){ClickJackFbHide();});
                        jQuery("a").mouseover(function(){ClickJackFbHide();});
                        jQuery("button").mouseover(function(){ClickJackFbHide();});
                        jQuery("textarea").mouseover(function(){ClickJackFbHide();});
                        jQuery(".ratingblock").mouseover(function(){ClickJackFbHide();});                       jQuery("object").mouseover(function(){ClickJackFbHide();});
                        }
 
        </script>
<--facebook end-->
  </body>
</html>