<section id="content" class="clearfix">
  <div class="container clearfix">
    <header class="page-header">
      <h1 class="page-title">Nos gustaría escuchar tus comentarios</h1>
    </header><!-- end .page-header -->
  </div><!-- end .container -->
  <section id="map">
    <p class="container">Algo está mal... Habilita tu JavaScript!</p>
  </section><!-- end #map -->
  <div class="container clearfix">
    <div class="one-fourth">

      <h3>Contacto</h3>
      <p>2a Av. Oriente Norte #168<br/>
      Colonia Centro, Fra comalapa, Chiapas, CP 30140, Mexico</p>
      <p>Tel: 963 63 106 54<br />
      Email: <?php echo $mail; ?><br />
      Web: <?php echo $dominio; ?></p>
    </div><!-- end .one-fourth -->
    <div class="three-fourth last">

      <h3>Mantente en contacto</h3>

      <form action="php/contact-send.php" method="post" class="contact-form">
      
        <p class="input-block">
          <label for="contact-name"><strong>Nombre</strong> (necesario)</label>
          <input type="text" name="name" value="" id="contact-name" required>
        </p>

        <p class="input-block">
          <label for="contact-email"><strong>Email</strong> (necesario)</label>
          <input type="email" name="email" value="" id="contact-email" required>
        </p>
        
        <p class="input-block">
          <label for="contact-subject"><strong>Asunto</strong></label>
          <input type="text" name="subject" value="" id="contact-subject">
        </p>

        <p class="textarea-block">
          <label for="contact-message"><strong>Mensaje</strong> (necesario)</label>
          <textarea name="message" id="contact-message" cols="88" rows="6" required></textarea>
        </p>
      
        <div class="hidden">
          <label for="contact-spam-check">Do not fill out this field:</label>
          <input name="spam-check" type="text" value="" id="contact-spam-check" />
        </div>

        <input type="hidden" name="enviar" value="true">
        <input type="submit" value="Submit">

        <div class="clear"></div>

      </form>
    </div><!-- end .three-fourth.last -->
  </div><!-- end .container -->
</section><!-- end #content -->
