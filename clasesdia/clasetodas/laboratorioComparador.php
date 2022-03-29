<?php
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
    
function ImprimeYComparaDosTablas($vector1, $vector2){
    
    imprimir($vector1,$vector2);
    echo"<br>";
    imprimir($vector2,$vector1); 
    
}


session_start();

if(empty($_SESSION["animales"])||empty($_SESSION["animalesDos"])){
    $_SESSION["animales"]=["grillo"=>"crick","pato"=>"quack","loro"=>"croack","perro"=>"guau","serpiente"=>"ffff","gato"=>"miau","vaca"=>"muuuu"];
    $_SESSION["animalesDos"]=[ "perro"=>"wof","cerdo"=>"oink","pato"=>"quack","gallo"=>"kikiriki","leon"=>"roarr","gato"=>"miau"];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(!empty($_POST["animal"])&&!empty($_POST["sonido"])){
        if(isset($_POST["insertarUno"])){
            $_SESSION["animales"][$_POST["animal"]]=$_POST["sonido"];
        }elseif(isset($_POST["insertarDos"])){
            $_SESSION["animalesDos"][$_POST["animal"]]=$_POST["sonido"];
        }elseif(isset($_POST["eliminarUno"])){
            if(isset($_SESSION["animales"][$_POST["animal"]])){
                unset($_SESSION["animales"][$_POST["animal"]]);
            }
        }elseif(isset($_POST["eliminarDos"])){
            if(isset($_SESSION["animalesDos"][$_POST["animal"]])){
                unset($_SESSION["animalesDos"][$_POST["animal"]]);
            }
        }
    }
}

$todosordenados=comparador($_SESSION["animales"],$_SESSION["animalesDos"]);
$todosordenados2=comparador($_SESSION["animalesDos"],$_SESSION["animales"]);
Ksort($_SESSION["animales"]);
ksort($_SESSION["animalesDos"]);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title>  </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <link rel="stylesheet" href="estilosLaboratorio.css">
    </head>
    <body>
        <h1> Laboratorio de Comparación </h1>
<?php
    echo '<div class="fuera">';
?>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" class = "formulario">
    <input type="submit" value="insertar" name="insertarUno">
    <input type="text" name="animal">
    <input type="text" name="sonido">
    <input type="submit" value="eliminar" name="eliminarUno">
</form>

<?php
    imprimirArray($todosordenados);
    imprimirArray($todosordenados2);
?>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" class = "formulario">
    <input type="submit" value="insertar" name="insertarDos">
    <input type="text" name="animal">
    <input type="text" name="sonido">
    <input type="submit" value="eliminar" name="eliminarDos">
</form>

<?php
        echo "</div>";
        echo '<div   class="informacion">';
        echo "<pre>";
        print_r ($_POST);
        print_r ($_SESSION);
        echo "</div>";
        echo "</pre>";

        ?> 
    </body>
</html>