<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title>  </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <link rel="stylesheet" href="estilos-numeros.css">
    </head>
             <body>
                 
                <?php
                    echo '<div class ="fuera">';

                    for ($otronumero=1 ; $otronumero<10; $otronumero++) {
                        
                        for ($numero=1 ; $numero<10; $numero++) {
                            $resultado=$otronumero*$numero;
                           echo  "{$otronumero}*{$numero} = ";
                           echo   $resultado,"<br>";
                        }
                        echo   "<br>";
                       
                    }

                    echo   "</div>";


                 ?>

                

                       

                 
                 
                
             </body>
