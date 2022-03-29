<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title>  </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <link rel="stylesheet" href="estilos-asocia.css">
<style>
.estilo {

border:1px solid black;


}


</style>
    </head>
             <body>
        
              <?php

                echo '<div class = "estilo">';

              $coches= [
                         ["nombre"=>"volvo","stock"=>22,"vendidos"=>18],
                         ["nombre"=>"BMW","stock"=>15,"vendidos"=>13],
                         ["nombre"=>"Saab","stock"=>5,"vendidos"=>2],
                         ["nombre"=>"Land Rover","stock"=>17,"vendidos"=>15]
                        ];
/*
                $nombres=array_keys($coches[0]);


                $valores=[];
                foreach($coches as $uno){
                    $valores[]=array_values($uno);
                    
                }
                  echo "<pre>";
                  print_r($nombres);
                  print_r($valores);
                  echo "</pre>";
  */               
///


$nombres=["nombre","stock","vendido"];
$valores=[
 ["Volvo",22,18],
 ["BMW",15,13],
 ["Land Rover",17,15]

];

$array_nuevo=[];
   /*                                                                  
$array_nuevo[0][$nombres[0]]=$valores[0][0];
$array_nuevo[0][$nombres[1]]=$valores[0][1];
$array_nuevo[0][$nombres[2]]=$valores[0][2];

$array_nuevo[1][$nombres[0]]=$valores[1][0];
$array_nuevo[1][$nombres[1]]=$valores[1][1];
$array_nuevo[1][$nombres[2]]=$valores[1][2];

$array_nuevo[2][$nombres[0]]=$valores[2][0];
$array_nuevo[2][$nombres[1]]=$valores[2][1];
$array_nuevo[2][$nombres[2]]=$valores[2][2];
*/

for($i=0;$i<count($valores);$i++){
  for($y=0;$y<count($nombres);$y++){
    $array_nuevo[$i][$nombres[$y]]=$valores[$i][$y];
  }
}

echo "<pre>";
print_r($array_nuevo);
echo"</pre>";
/*

$array_nuevo[0]["nombre"]="volvo";
$array_nuevo[0]["stock"]=22;
$array_nuevo[0]["vendidos"]=18;


$array_nuevo[1]["nombre"]="bmw";
$array_nuevo[1]["stock"]=15;
$array_nuevo[1]["vendidos"]=13;

$array_nuevo[2]["nombre"]="Saab";
$array_nuevo[2]["stock"]=5;
$array_nuevo[2]["vendidos"]=2;

$array_nuevo[3]["nombre"]="Land Rover";
$array_nuevo[3]["stock"]=17;
$array_nuevo[3]["vendidos"]=1;

                 
*/


$nombres=["nombre","stock","vendido"];
$valores=[
 ["Volvo",22,18],
 ["BMW",15,13],
 ["Land Rover",17,15]

];
                  
    foreach ($valores as $fila) {

      for($i=0;$i<count($nombres);$i++){

           $parcial[$nombres[$i]]=$fila[$i];
         
          

      }

          $completa[]=$parcial;

      }      
    
        echo "<pre>";
        print_r($completa);
        echo "</pre>";

                   
           
        
              



             ?>





                
             </body>



</html>