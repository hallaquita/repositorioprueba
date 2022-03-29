<?php

$destino= "luisramirezp7025@gmail.com";
$correo= "hola\r\n mundo";
$asunto="saludos";
$cabecera="from:backend@training.cat\r\nbcc:tito7034@gmail.com";

$confirmar=mail($destino,$correo,$asunto,$cabecera);
 echo  $confirmar;




?>

