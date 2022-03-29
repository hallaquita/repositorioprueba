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

                $coches =["volvo","BMW","Toyota","kmbjnk","vgjvhkjgvhkj"];
                $cuantos=count($coches);

                echo "<pre>";
                print_r($coches);
                echo "</pre>";

                echo "<ul>";
                for($numero=0;$numero<$cuantos;$numero++){
                    echo "<li>{$coches[$numero]}</li>";
                }
                echo "</ul>";







                  /*
                  $coches[0]
                  $coches[1]
                  $coches[2]
                  for ($num=0;$num <=2;$num ++)
                  {

                       echo $coches[$num]."<br/>";

                  }

*/
                      
                   
                     
                    
                  
                                                      
                 
                 ?>
                

                       

                 
                 
                
             </body>
