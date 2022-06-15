<?php
$destino ="nicolas.arellano@cftsa.cl";

$name  =  $_POST ['name'];
$email =  $_POST ['email'];
$asunto = $_POST ['asunto'];
$message = $_POST ['message'];

$header = "envio formulario de contacto localhost";
$mensaje_completo = "\n nombre:". $name . "\n". "Email:". $email . "\n". "asunto :". $asunto ."\n". "Mensaje : ". $message;
  mail($destino, $asunto, $mensaje_completo, $header);
  header('Location:contacto');

  
?>