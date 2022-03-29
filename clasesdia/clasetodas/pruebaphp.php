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
        
              <p>
                <?php
                     echo "texto procedente de php";
                 ?> 
                 </p>
                
                
                <p>
                    <?php 
                    echo ("<h2> me gusta el php!</h2>");
                    echo "<p> Hola Mundo!!</p>";
                    echo "<p>","Varios", "Texto","comentarios","</p>";
                     ?>
               </p>
                   <?php
                   $Texto = "texto prueba";
                   echo $Texto;
                   ?>

                   <?php
                   $test="Luis Ramirez";
                   echo "texto para trabajar con {$test} es lo mejor.";
                   ?>
                   

                
                    
                
                
                <?php
                   $texto="texto"."de"."prueba.";
                   echo $texto;
                   ?>
                  

               <?php
                echo strlen ("Hello world!");
                ?>
            
    


            















                
             </body>



</html>