<?php
$nombre - $_POST['nombre'];
$mail - $_POST['email'];
$consula - $_POST['consulta'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
​
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());
​
$para = 'russofg@gmail.com'; // El mail a donde van a llegar los mensajes
$asunto = 'Consulta de Plataforma Eventos';
​
mail($para, $asunto, utf8_decode($mensaje), $header);
​
header('Location:index.html');
​



?>