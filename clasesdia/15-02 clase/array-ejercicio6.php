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
                 

    $coches=[ "volvo","BMW","Toyota","Nissa","seat", "Mercedes"];
    $borrar=[2,3,0,1];
                               
    echo "<pre>";
    print_r($coches);
    print_r($borrar);
    echo "</pre>";

    echo "<pre>";
    rsort($borrar);
    print_r($borrar);
    echo "</pre>";  
/*
    array_splice ($coches,4,1);
    array_splice ($coches,2,1);
    array_splice ($coches,0,1);
*/
/*    
    array_splice ($coches,$borrar[0],1);
    array_splice ($coches,$borrar[1],1);
    array_splice ($coches,$borrar[2],1);
*/
    $cuantoshay=count($borrar);
    for($i=0;$i<$cuantoshay;$i++){
        array_splice ($coches,$borrar[$i],1);
    }

    echo "<pre>";
    print_r($coches);
    print_r($borrar);
    echo "</pre>";

            

                  
?>
</body>
