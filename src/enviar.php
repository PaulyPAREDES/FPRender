<?php

//llamando alos campos
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$archivo = $_POST['archivo'];

//Datos para el correo
$destinatario="fpserviciorender@gmail.com";
$asunto = "Contancto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Archivo: $archivo ";

//enviando mensaje
mail($destinatario, $asunto, $carta);
header('location:mensajeenviado.html')
?>