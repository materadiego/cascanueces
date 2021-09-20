<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "IN COMPANY: Este mensaje fue enviado por: " . $nombre . $apellido . " \r\n";
$mensaje .= "Su e-mail es : " . $email . " \r\n";
$mensaje .= "Teléfono de contacto: " . $telefono . " \r\n";
$mensaje .= "Empresa: " . $empresa . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'info@cascanuecesarg.com';
$asunto = 'Consulta via web';

mail($para, $asunto, utf8_decode($mensaje), $header);


header("Location:in-company.html#contacto");
?>
