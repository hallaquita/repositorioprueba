<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title>  </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <link rel="stylesheet" href="estilos-numeros.css ">
    </head>
             <body>
                <?php
                

                  $coches=[ "volvo","BMW","Toyota","Nissa","audi", "opel"];
                  $posicion_borrar=2;

                  $cuantos=count($coches);
                  $coches_aux=[];

                 for($num=0;$num<$posicion_borrar;$num++){
                    $coches_aux []=$coches[$num];
                 }

                 for($num=$posicion_borrar;$num<$cuantos-1;$num++){
                    $coches_aux []=$coches[$num+1];
                 }
/*
                  $coches_aux[0] =$coches[0];
                  $coches_aux[1] =$coches[1];

                  $coches_aux[2] =$coches[3];
                  $coches_aux[3] =$coches[4];


              for($num=2; $num >= $posicion_borrar; --$num){
                $coches[$num] =$coches[$num];
*/
                echo "<pre>";
                print_r($coches_aux);
                echo "</pre>";   
                     
                

                
                

                       

                 
                 
                ?>
             </body>
