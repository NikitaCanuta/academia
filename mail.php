<?php
$to = 'academiaalberteinstein@gmail.com';

$subject = 'Comentario de la pagina web';
$message = $_POST["mensaje"];
$headers = "From: " . $_POST['email']. "\r\n";
$headers .= "Reply-To: ". $_POST['nombre'] . "\r\n";
$headers .= "CC: correo electronico \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

@mail($to, $subject, $message, $headers);

header("Location:index.html");

 ?>
