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

        echo 'Merci de nous avoir contacté! Nous vous répondrons dans les plus brefs délais.';
    } else {
        echo 'Erreur : l\'adresse e-mail est invalide.';
    }
}
?>

<form action="contact.php" method="post">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name">


    <label for="email">Adresse e-mail :</label>
    <input type="email" id="email" name="email">


    <label for="subject">Objet :</label>
    <input type="text" id="subject" name="subject">


    <label for="message">Message :</label>
    <textarea id="message" name="message"></textarea>


    <input type="submit" value="Envoyer">
</form>