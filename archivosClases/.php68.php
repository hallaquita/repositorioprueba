<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title>  </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <link rel="stylesheet" href="estilos-numeros.css ">
    </head>



<?php
 
 /*$enlace = fopen("luis3.txt","x");
 fwrite($enlace,"hola mundo \r\n el mejor mundo " );*/

 if( $enlace=fopen("luis3.txt","w")){
  $contenido ="hola \r\n que tal";
  fwrite($enlace, $contenido);
  fclose($enlace);
 } else {
     echo "El archivo no se pudo abrir";
 }
 





?>

</body>
</html