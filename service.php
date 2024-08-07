<?php
include_once("header.php");
?>
<main>
  <section id="home"></section>
  <section class="hero">
    <div class="hero-text">
      <h1>Servicio Técnico</h1>
      <h3>¡DESPLAZAMIENTO GRATÍS!</h3>
      
        Si busca un servicio de reparación de <?php echo $_GET['serv'];?> en
        Tarragona, contacte con nuestro equipo de profesionales
        cualificados. 
     
      </p>
      <p>Servicio técnico. ¡Llame!</p>
      <h2>
        <a href="https://wa.me/34642580697" target="_blank">
          Pulse para llamar 642580697
        </a>
      </h2>
    </div>
    <div class="hero-image">
      <img src="images/<?= str_replace(" ", "", strtolower($_GET['serv'])) . '.jpg' ?>" alt="<?php echo $_GET['serv'];?>" />
    </div>
  </section>
  <section id="services" class="services-overview">
    <h2>Reparación de <?php echo $_GET['serv'];?></h2>
    <div class="service">
      <img src="images/<?= str_replace(" ", "", strtolower($_GET['serv'])) . '.jpg' ?>" alt="<?php echo $_GET['serv'];?>" />
      <h3><?php echo $_GET['serv'];?></h3>
    </div>
  </section>
  <section id="contact" class="contact-whatsapp">
    <h2>Contacta Con Nosotros</h2>
    <a
      href="https://wa.me/34642580697"
      target="_blank"
      class="whatsapp-link"
    >
      <img src="images/wa-whatsapp-icon.png" alt="WhatsApp Icon" />
      

      Nuestro WhatsApp 

      6 42 58 06 97
    </a>
    <a
      href="https://wa.me/34655509067"
      target="_blank"
      class="whatsapp-link"
    >
      <img src="images/wa-whatsapp-icon.png" alt="WhatsApp Icon" />
      

      Nuestro WhatsApp 

      6 55 50 90 67
    </a>
    <a href="/contact.php" class="email-link">
      <img src="images/mail-1454732_640.png" alt="email" />
      <br />
      Contacto 
    </a>
  </section>
</main>
<?php include_once("footer.php")?>
<script src="js/script.js"></script>
</body>

</html>