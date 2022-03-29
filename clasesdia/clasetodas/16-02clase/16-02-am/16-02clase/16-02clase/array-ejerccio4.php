<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title>  </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <link rel="stylesheet" href="estilos-coches.css ">

   
    </head>
             <body>
                <?php
                  echo '(<div class="coche">)';

                  
                
                  $coches=[ "volvo","BMW","Toyota","Nissa"];
                  $coches[]="mercedes";

                  $cochenuevo="seat";
                  $nuevaposicion=1;

                 

                  $cuantos=count($coches);
                         
             
              for($num=$nuevaposicion; $num<($cuantos-1); $num++ ){
                $coches[$num] =$coches[$num+1];
                           
                

            }   
                   unset($coches[count($coches)-1]);
                   var_dump($coches);
                  
              
               

                echo "<pre>";
                print_r($coches);
                echo "</pre>";     
                
                
                
                
                
              
                ?>
                

                  
             </body>
