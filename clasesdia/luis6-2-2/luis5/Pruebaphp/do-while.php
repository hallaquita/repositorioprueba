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
                                                  
                 do{
                    $numero=rand(1,1000);
                } while(($numero%11)!=0);
                  
                    echo "he encontrado el" . $numero;
                
                         

                 ?>
                
             </body>
