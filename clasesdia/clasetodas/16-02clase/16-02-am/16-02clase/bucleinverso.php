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
                  $numero= 30;
                  $numerovuelta=1;
                  define("ESP","</br>");
                  

                 
                         
                  while($numero >=0)
                  {
                      echo "vuelta", $numerovuelta," numero ", $numero.ESP;
                      if($numero ==20){
                        $numero-=5;
                      }
                      $numero-=5;
                      $numerovuelta++;
                      
                }
                         

                 ?>
                
             </body>



</html>