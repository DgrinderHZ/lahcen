<?php
include_once("header.php");
?>
<?php
if (isset($_POST['submit'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if ($email) {
        $to = 'contactar@globalservice.cat';
        $subject = 'Formulaire de contact';
        $message = 'Nom : ' . $name . "\n" . 'Adresse e-mail : ' . $email . "\n" . 'Objet : ' . $subject . "\n" . 'Message : ' . $message;
        $headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        // Rediriger l'utilisateur vers une page de succès
       header('Location: success.php');
       exit;
    } else {
        echo '<h2 style="color: red; text-align: center;">Error: la dirección de correo electrónico es inválida.</h2>';
    }
}
?>
<main>
  <section id="contact">
    <h2>Formulaire de contacto</h2>
    <div class="container">
      <form action="contact.php" method="post">
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Ingrese su nombre">
        </div>
        <div class="form-group">
          <label for="email">Correo electrónico:</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Ingrese su correo electrónico">
        </div>
        <div class="form-group">
          <label for="subject">Asunto:</label>
          <input type="text" id="subject" name="subject" class="form-control" placeholder="Ingrese el asunto de su mensaje">
        </div>
        <div class="form-group">
          <label for="message">Mensaje:</label>
          <textarea id="message" name="message" class="form-control" placeholder="Ingrese su mensaje"></textarea>
        </div>
        <input type="submit" value="Enviar" name="submit" class="btn btn-primary">
      </form>
    </div>
  </section>
</main>
<?php include_once("footer.php")?>
<script src="js/script.js"></script>
</body>

</html>