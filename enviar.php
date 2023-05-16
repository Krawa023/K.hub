<?php
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Edad = $_POST['Edad'];
$ComidaFavorita = $_POST['Comida Favorita'];
$AnimalFavorito = $_POST['Animal Favorito'];
$Mail = $_POST['Email'];


$header = 'From: ' . $Mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$message = "Este mensaje fue enviado por: " . $Nombre . " " . $Apellido . " \r\n";
$message .= "Su e-mail es: " . $Mail . " \r\n";
$message .= "Su edad es: " . $Edad . " \r\n";
$message .= "Su comida favorita es: " . $ComidaFavorita . " \r\n";
$message .= "Su animal favorito es: " . $AnimalFavorito . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$Para = 'krawabusiness@gmail.com';
$Asunto = 'Respuesta de MI PRIMER SITIO WEB';

mail($Para, $Asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
