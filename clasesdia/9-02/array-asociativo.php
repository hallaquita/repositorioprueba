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

                $valores=array_keys($coches);
                echo "<pre>";
                print_r($valores);
                 echo "</pre>";
             

                 $valores=array_values($coches);
                echo "<pre>";
                print_r($valores);
                 echo "</pre>";

           /*
              echo "<table>";
            
               echo "<tr>";
               echo "<th> Nombre </th>";
               echo "<th>stock</th>";
               echo "<th>vendido</th>";
               echo "</tr>";
              
              echo "<tr>";
              echo "<td>".$coches[0]["nombre"]."</td>";
              echo "<td>".$coches[0]["stock"]."</td>";
              echo "<td>".$coches[0]["vendidos"]."</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td>".$coches[1]["nombre"]."</td>";
              echo "<td>".$coches[1]["stock"]."</td>";
              echo "<td>".$coches[1]["vendidos"]."</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td>".$coches[2]["nombre"]."</td>";
              echo "<td>".$coches[2]["stock"]."</td>";
              echo "<td>".$coches[2]["vendidos"]."</td>";
              echo "</tr>";
              echo "</div>";
              echo "</table>";
              
              echo "<table>";
              echo "<tr>";

              foreach ($coches[0] as $clave => $valor){
                    echo "<th>".$clave."</th>";
                }
               echo "</tr>";
                foreach($coches as $fila){
                    echo "<tr>";
                    foreach( $fila as $dato){
                        echo "<td>".$dato."</td>";
                    }
                    echo "</tr>";
                }

                 echo  "</table>";
              
                


                 echo "</div>";
*/
               ?>









                
             </body>



</html>









