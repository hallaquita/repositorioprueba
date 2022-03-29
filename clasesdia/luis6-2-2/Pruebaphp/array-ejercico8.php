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

                $nombres=array_keys($coches[0]);


                $valores=[];
                foreach($coches as $uno){
                    $valores[]=array_values($uno);
                    

                  echo "<pre>";
                  print_r($nombres);
                  print_r($valores);
                  echo "</pre>";
                 


                  /*

                  foreach ($nombres as $dos){
                      $nombres= array_values($dos);

                  }

                  echo "<pre>";
                  print_r($nombres);
                  
                  echo "</pre>";
                  */
                 

                   
           
        
              



             ?>





                
             </body>



</html>