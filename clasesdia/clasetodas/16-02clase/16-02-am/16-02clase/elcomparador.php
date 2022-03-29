<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title> El comparador </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <link rel="stylesheet" href="estilosElComparador.css">
 
    </head>
     <body>
     



<?php
 $animales=["grillo"=>"crick","pato"=>"quack","loro"=>"croack","perro"=>"guau","serpiente"=>"ffff","gato"=>"miau","vaca"=>"muuuu"];
 $animalesdos=[ "perro"=>"wof","cerdo"=>"oink","pato"=>"quack","gallo"=>"kikiriki","leon"=>"roarr","gato"=>"miau"];
 echo '<div class="fuera">';
 echo '<table>';

    $claves=array_keys($animalesdos);
    $valores=array_values($animalesdos);
    foreach ($animales as $clave=>$valor){
      
        echo "<tr>"; 
       if (in_array($clave,$claves)){
                
        echo "<td class=\"colorVerde\">{$clave}</td>"; 
       }else {
        echo "<td class=\"colorRojo\">{$clave}</td>"; 
       }
        
       if(in_array($valor,$valores)){

        echo "<td class=\"colorVerde\">{$valor}</td>"; 
    }else {
     echo "<td class=\"colorRojo\">{$valor}</td>"; 
    

       }
       
        
        echo "</tr>"; 

    }
          

   echo "</table>";
   
   echo "<br>";
   echo '<table class="fuera">';
   $claves=array_keys($animales);
   $valores=array_values($animales);

    foreach ($animalesdos as $clave=>$valor){
        echo "<tr>";
        if (in_array($clave,$claves)){
            echo "<td class=\"colorVerde\">{$clave}</td>"; 
        }else {
            echo "<td class=\"colorRojo\">{$clave}</td>"; 
        }
        if (in_array($valor,$valores)){
            echo "<td class=\"colorVerde\">{$valor}</td>"; 
        }else{
            echo "<td class=\"colorRojo\">{$valor}</td>"; 
        }
        echo "</tr>"; 
    }
    echo "</table>";
    echo "</div>";
?>
</body>
