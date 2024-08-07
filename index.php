<?php

include_once("header.php");
require_once 'ServicioRepository.php';
require_once 'Servicio.php';

$repository = new ServicioRepository();
$servicios = $repository->getAllServicios();
?>
<main>
  <section id="home" class="hero">
    <div class="hero-text">
      <h1>Servicio Técnico</h1>
      <p>
        <span>¡SIN CARGO POR DESPLAZAMIENTO!</span>
        </br>
        Si busca un servicio de reparación de electrodomésticos en
        Tarragona, contacte con nuestro equipo de profesionales
        cualificados. Ofrecemos un servicio personalizado y cercano para que
        sus equipos vuelvan a estar en perfectas condiciones. Solo contáctenos, evaluaremos su caso y le asignaremos al mejor
        profesional. No importa el electrodoméstico, la marca o el modelo:
        garantizamos la reparación con nuestra experiencia y conocimientos.
        </br>
        </br>
        Servicio técnico. ¡Llame Gratis!
        <br>
        <a href="https://wa.me/34642580697" target="_blank">
          Pulse para llamar </br> 👉 6 55 50 90 67
        </a>
      </p>


    </div>
    <div class="hero-image">
      <img src="images/lahcen.jpg" alt="Repair Service" />
    </div>
  </section>


  <section id="services" class="services-overview">
    <h2>Nuestros Servicios</h2>
    <?php foreach ($servicios as $servicio) : ?>
      <div class="service">
        <a href="service.php?serv=<?php echo $servicio->getName(); ?>">
          <img src="images/<?= str_replace(" ", "", strtolower($servicio->getName())) . '.jpg' ?>" alt="<?= $servicio->getName() ?>" />
          <h3><a href="service.php?serv=<?php echo $servicio->getName(); ?>"><?php echo $servicio->getName(); ?></a></h3>
        </a>
      </div>
    <?php endforeach; ?>
  </section>
 
  <section id="contact" class="contact-whatsapp">
    <h2>Contacta Con Nosotros</h2>
    <a href="https://wa.me/34642580697" target="_blank" class="whatsapp-link">
      <img src="images/wa-whatsapp-icon.png" alt="WhatsApp Icon" />
      <br />
      Nuestro WhatsApp <br />
      6 42 58 06 97
    </a>
    <a href="https://wa.me/34655509067" target="_blank" class="whatsapp-link">
      <img src="images/wa-whatsapp-icon.png" alt="WhatsApp Icon" />
      <br />
      Nuestro WhatsApp <br />
      6 55 50 90 67
    </a>
    <a href="/contact.php" class="email-link">
      <img src="images/mail-1454732_640.png" alt="email" />
      <br />
      Contacto 
    </a>

  </section>

</main>
<?php include_once("footer.php") ?>
<script src="js/script.js"></script>
</body>

</html>