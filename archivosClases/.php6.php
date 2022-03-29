<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title> frases </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <link rel="stylesheet" href="estilos-numeros.css">
    </head>
    <body>


    <?php
        echo '<div class ="fuera">';
        echo '<div class="num">';

        $numero1= rand(1,10);
        $numero2=rand(1,10);

        echo rand($numero1,$numero2);

        echo ("$numero1+$numero2 =");
        echo ($numero1+$numero2),"<br>";

         
        echo ("$numero1-$numero2 =");
        echo ($numero1-$numero2),"<br>";


        echo ("$numero1*$numero2 =");
        echo ($numero1*$numero2),"<br>";

        echo ("$numero1/$numero2 =");
        echo round (($numero1/$numero2),2
    
    
    ),"<br>";

        echo ("$numero1%$numero2 =");
        echo ($numero1%$numero2),"<br>";
       
        echo ("$numero1<sup>$numero2</sup> =");
        echo ($numero1**$numero2),"<br>";
        

        echo ("$numero1 =");
        echo round (sqrt ($numero1),2),"<br>";
        
       $numero=10;
       echo --$numero;
       echo ++$numero;

       var_dump ($numero--);
       var_dump (--$numero);
       var_dump (++$numero);
       var_dump($numero++);


       
    ?>     
    </div>
</di>
               
    </body>