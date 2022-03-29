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
                                       
                                    
                        
               function comparador($arrayImprimir,$arrayComparador){
                   $verdes=[];
                   $rojos=[];
                   $verdeRojos=[];
                    

                   $claves=array_keys($arrayComparador);
                   $valores=array_values($arrayComparador);
                   foreach ($arrayImprimir as $clave=>$valor){
                       if (in_array($clave,$claves)){
                            $verdes[$clave]=$valor;
                           
                       }else {
                            $rojos[$clave]=$valor;
                          
                       }
                       if(in_array($valor,$valores)){

                              $verdes[$valor]=$clave;
                            
                       }else {
                               $rojos[$valor]=$clave;
                           
                       }
                       
         }
   
               echo '<div class="fuera">';
               function ImprimeYComparaDosTablas($vector1, $vector2){
                   comparador($vector1,$vector2);
                   echo"<br>";
                   comparador($vector2,$vector1);    
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