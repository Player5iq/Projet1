<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  $to = "murat.kevin.idf@gmail.com";
  $subject = "Nouveau commentaire de $name";
  $body = "Nom : $name\n\nAdresse e-mail : $email\n\nMessage : $message";
  $headers = "From: noreply@votre-e-mail.com";

  if(mail($to, $subject, $body, $headers)) {
    echo "<p>Votre commentaire a été envoyé avec succès !</p>";
  } else {
    echo "<p>Une erreur s'est produite lors de l'envoi de votre commentaire. Veuillez réessayer plus tard.</p>";
  }
}
?>