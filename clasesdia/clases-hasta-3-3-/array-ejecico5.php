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
                 

                  $coches=[ "volvo","BMW","Toyota","Nissa"];

                  
                 
                  echo "<pre>";
                  print_r($coches);
                  echo "</pre>";

                  echo"<br>";
                   array_splice ($coches,0,0,"seat");
                    print_r($coches);

                  
                 ?>


                
                

                       

                 
                 
                
             </body>
