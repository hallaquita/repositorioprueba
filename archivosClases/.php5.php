<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title> frases </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba php">
        <meta name="author" content="LJR">
    </head>
    <body>
    <?php
                $primerafrase= "Hoy es un dia malo pero";
                $segundafrase= " mañana  sera el dia mejor de la vida";
    ?>     
    <?php
        echo "<p>.$primerafrase </p>";
        echo "<p>.$segundafrase </p>";
        echo "<p>",$primerafrase, $segundafrase ,"</p>";
            $limpia= str_replace("malo", "****",$primerafrase,);
        echo $limpia."<br>";
            $frasejuntas=  $primerafrase.", ".$segundafrase."." ;
        echo $frasejuntas."<br>";
        echo mb_strtoupper($segundafrase."<br>");
        echo ucwords($segundafrase);
        

        
                
    ?>
              

              
               
    </body>



</html>