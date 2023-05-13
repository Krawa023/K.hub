<?php
$name = $_POST['Nombre'];
$name2 = $_POST['Apellido'];
$Edad = $_POST['Edad']
$ComidaFavorita = $_POST['Comida Favorita']
$AnimalFavorito = $_POST['Animal Favorito']
$mail = $_POST['Email']


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$message = "Este mensaje fue enviado por: " . $name . " " . $name2 . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Su edad es: " . $Edad . " \r\n";
$message .= "Su comida favorita es: " . $ComidaFavorita . " \r\n";
$message .= "Su animal favorito es: " . $AnimalFavorito . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'krawabusiness@gmail.com';
$asunto = 'Respuesta de MI PRIMER SITIO WEB';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
