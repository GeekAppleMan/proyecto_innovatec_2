<?php
error_reporting(0);
$nombre = $_POST['name'];
$correo_electronico= $_POST['email'];
$opinion=$_POST['message'];
$telefono=$_POST['phone'];
$header = 'From: ' . $correo_electronico;
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $correo_electronico . " \r\n";
$mensaje .="danos tu opinion".$opinion . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'Jaimehbo13@hotmail.com';
$asunto = 'AQUÍ LO QUE QUIERAS';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'mensaje enviado correctamente';

?>