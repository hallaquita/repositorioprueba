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
                 

   $columnas=["nombre","stock","vendido"];
   $coches=[
    ["Volvo",22,18],
    ["BMW",15,13],
    ["Land Rover",17,15]

   ];


   echo "<pre>";
   print_r($columnas);
   print_r($coches);
   echo "</pre>";  
    
/*
   $tablas=[$columnas,$coches];
         
         foreach($columnas as $coches){
                  
            echo "<pre>";
           print_r($Tablas);
            
            echo "</pre>";  

         }
             
*/
                  
?>


<table>
   <tr>
      <th>nombre</th>
      <th>stock</th>
      <th>vendido</th>
   </tr>
   <tr>
      <td>Volvo</td>
      <td>22</td>
      <td>18</td>
   </tr>
   <tr>
      <td>BMW</td>
      <td>15</td>
      <td>13</td>
   </tr>
   <tr>
      <td>Laned Rover</td>
      <td>17</td>
      <td>15</td>
   </tr>
</table>


<?php
echo "<table>";

echo "<tr>";
echo "<th>".$columnas[0]."</th>";
echo "<th>".$columnas[1]."</th>";
echo "<th>".$columnas[2]."</th>";
echo "</tr>";

echo "<tr>";
echo "<td>".$coches[0][0]."</td>";
echo "<td>".$coches[0][1]."</td>";
echo "<td>".$coches[0][2]."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>".$coches[1][0]."</td>";
echo "<td>".$coches[1][1]."</td>";
echo "<td>".$coches[1][2]."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>".$coches[2][0]."</td>";
echo "<td>".$coches[2][1]."</td>";
echo "<td>".$coches[2][2]."</td>";
echo "</tr>";

echo "</table>";


echo "<table>";
echo "<tr>";

/*
for( $i=0;$i<count($columnas);$i++){
   echo "<th>".$columnas[$i]."</th>";
}
echo "</tr>";
*/

echo "<table>";
echo "<tr>";
foreach ($columnas as $nombrecolumna){
   echo "<th>".$nombrecolumna."</th>";
}
echo "</tr>";
foreach ($coches as $fila){
   echo "<tr>";
   echo "<td>".$fila[0]."</td>";
   echo "<td>".$fila[1]."</td>";
   echo "<td>".$fila[2]."</td>";
   echo "</tr>";
}
echo "</table>";

echo "<table>";
echo "<tr>";
foreach ($columnas as $nombrecolumna){
   echo "<th>".$nombrecolumna."</th>";
}
echo "</tr>";
foreach ($coches as $fila){
   echo "<tr>";
   for($i=0;$i<count($fila);$i++){
      echo "<td>".$fila[$i]."</td>";
   }
   echo "</tr>";
}
echo "</table>";


echo "<table>";
echo "<tr>";
foreach ($columnas as $nombrecolumna){
   echo "<th>".$nombrecolumna."</th>";
}
echo "</tr>";
foreach ($coches as $fila){
   echo "<tr>";
   foreach($fila as $dato){
      echo "<td>".$dato."</td>";
   }
   echo "</tr>";
}
echo "</table>";





?>
</body>
