<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title>  </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <link rel="stylesheet" href="estilosElComparador.css">
    </head>
             <body>
              <?php
               $animales=["grillo"=>"crick","pato"=>"quack","loro"=>"croack","perro"=>"guau","serpiente"=>"ffff","gato"=>"miau","vaca"=>"muuuu"];
               $animalesDos=[ "perro"=>"wof","cerdo"=>"oink","pato"=>"quack","gallo"=>"kikiriki","leon"=>"roarr","gato"=>"miau"];
                                       
                                    
                        
               function comparador($arrayImprimir,$arrayComparador)
               {
                   $verdes=[];
                   $rojos=[];
                   $verdeRojos=[];

                   $claves=array_keys($arrayComparador);
                   $valores=array_values($arrayComparador);
                   foreach ($arrayImprimir as $clave=>$valor)
                   {
                       if (in_array($clave,$claves))
                       {
                           if(in_array ($valor,$valores))
                           {
                               $verdes[$clave]=$valor;                             
                           }
                           else 
                           {
                                $verdeRojos[$clave]=$valor;                          
                           }
                       }
                        else 
                        {
                            if(in_array ($valor,$valores))
                            {
                                $verdeRojos[$clave]=$valor;                             
                            }
                            else 
                            {
                                 $rojos[$clave]=$valor;                          
                            }

                        }
                    }   
                    $resultado=[$verdes,$verdeRojos,$rojos];  
                    return $resultado; 
                }


$todosordenados=comparador($animales,$animalesDos);
imprimirArray($todosordenados);
$todosordenados=comparador($animalesDos,$animales);
imprimirArray($todosordenados);


function imprimirArray($todos){
    echo "<table>";
    foreach ($todos[0] as $nombre=>$valor){
        echo "<tr><td class=\"colorVerde\">{$nombre}</td>";
        echo "<td class=\"colorVerde\">{$valor}</td></tr>"; 
    }
    foreach ($todos[1] as $nombre=>$valor){
        echo "<tr><td class=\"colorVerde\">{$nombre}</td>";
        echo "<td class=\"colorRojo\">{$valor}</td></tr>"; 
    }
    foreach ($todos[2] as $nombre=>$valor){
        echo "<tr><td class=\"colorRojo\">{$nombre}</td>";
        echo "<td class=\"colorRojo\">{$valor}</td></tr>"; 
    }
    echo "</table>";
}


                function imprimir($arrayImprimir,$arrayComparador){
                
                    echo '<table>';
                      $claves=array_keys($arrayComparador);
                      $valores=array_values($arrayComparador);
                      foreach ($arrayImprimir as $clave=>$valor){
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
                  }
      
   
               echo '<div class="fuera">';
               function ImprimeYComparaDosTablas($vector1, $vector2){
                   imprimir($vector1,$vector2);
                   echo"<br>";
                   imprimir($vector2,$vector1);    
               }
               ImprimeYComparaDosTablas($animales,$animalesDos);
                //comparador($animales,$animalesDos);
               // echo"<br>";
               //comparador($animalesDos,$animales);
               //comparador($animales,$animalesDos);
               "</div>";
   









            ?> 
             </body>



</html>