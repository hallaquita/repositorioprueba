<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title>  </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
    </head>
             <body>
        
             <?php
                $animal="perro";
                switch ($animal){
                    case "gato": 
                        echo "es un gato";
                        break;
                    case "toro":
                        echo "es un toro bueno"; 
                        break;
                    case "gallina":
                    case "pajaro":
                    case "caballo":
                        echo  "es un perro bueno"; 
                        break;
                    default: 
                        echo "no hay nada";
                               

               }


?>