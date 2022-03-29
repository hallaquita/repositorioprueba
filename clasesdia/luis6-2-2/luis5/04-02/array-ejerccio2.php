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
                  $coches[]="mercedes";

                  $cochenuevo="seat";
                  $nuevaposicion=1;

                  echo "<pre>";
                  print_r($coches);
                  echo "</pre>";

                  $cuantos=count($coches);
                  
         /*      $coches[4] =$coches[3];
                $coches[3] =$coches[2];
                $coches[2] =$coches[1];
*/
              for($num=$cuantos; $num> $nuevaposicion; $num-- ){
                $coches[$num] =$coches[$num-1];
              }          
                $coches[$nuevaposicion]=$cochenuevo;

                echo "<pre>";
                print_r($coches);
                echo "</pre>";     
                 ?>
                

                       

                 
                 
                
             </body>
