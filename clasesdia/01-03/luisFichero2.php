<?php
session_start();
if(isset($_POST["Nuevo"])){
  $contenido= (htmlspecialchars($_POST["dniNuevo"]));
  if(file_exists("dni/dni.txt")){
    if($enlace=fopen("dni/dni.txt","a")){
        fwrite($enlace, ",".$contenido);
       
    }

  }
    

}
if(empty($_SESSION ["dniNuevoCliente"])){
    $_SESSION["dniNuevo"]=[];
   
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST ["dniNuevo"]))
    {
       if(!empty(htmlspecialchars($_POST["dniNuevo"])))
       {
          $_SESSION["dniNuevoCliente"]=$_POST["dniNuevo"];
       }
    }
    elseif(isset($_POST ["sustituir"]))
    {
        $_SESSION["fase"]=2;
    }
    if(isset($_POST ["sustituir"]))
    {
        if(!empty(htmlspecialchars($_POST["dniSocio"])))
        {
            $_SESSION["dniNuevoCliente"]=$_POST["dniNuevo"];  
           
            
        }
    } 

    
}       



// Formato array DNIS
 $array_dnis=[];
 $array_dnis[]=["dni"=>"63587354R","ultimo"=>false];
 $array_dnis[]=["dni"=>"63525954Q","ultimo"=>true];
 $array_dnis[]=["dni"=>"24369754T","ultimo"=>false];
 file_put_contents("nuevosarchivodnis.txt",serialize($array_dnis));
 echo "<pre>";
 var_dump($array_dnis);
 echo "</pre>";



if(isset($_POST["sustituir"])&&!empty($_POST["dniInvitado"])&&strlen($_POST["dniInvitado"])==9){
    $array_dnis=unserialize(file_get_contents("nuevosarchivodnis.txt"));
    foreach($array_dnis as $key=>$dni){
        if($dni["dni"]==$_POST["dniSocio"]){
            for($i=0;$i<count($array_dnis);$i++){
                $array_dnis[$i]["ultimo"]=false;
            }
            $array_dnis[$key]["dni"]=$_POST["dniInvitado"];
            $array_dnis[$key]["ultimo"]=true;
            file_put_contents("nuevosarchivodnis.txt",serialize($array_dnis));
        }
    }
    echo "<pre>";
    var_dump($array_dnis);
    echo "</pre>";



    if(file_exists("dni/dni.txt")){
        if($enlace=fopen("dni/dni.txt","r+")){
            while($dni=fread($enlace,10)){
                $dni_limpio=trim($dni,",");
                if($dni_limpio==$_POST["dniSocio"]){
                    $encontrado=true;
                    echo $dni_limpio."<br>";
                    break;
                }
            }
        }
    }
}

if(isset($_POST["sustituir"])&&!empty($_POST["dniInvitado"])){
    if(strlen($_POST["dniInvitado"])==9){
        if(isset($encontrado)){
        // echo "<br>".ftell($enlace)." ";
            fseek($enlace,-9,SEEK_CUR);
            echo ftell($enlace);
            fwrite($enlace,$_POST["dniInvitado"]);
        }
    }else{
        echo "En nuevo DNI debe tener el formato correcto<br>";
    }
}        


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title> club ficheros  </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <link rel="stylesheet" href="luisFichero.css">

    </head>
    <body>
<?php
 echo  "<div class='lista'>";


if($enlace=fopen("dni/dni.txt","r")){
    while($dni=fread($enlace,10)){
        
        $dni_limpio=trim($dni,",");
        echo $dni_limpio."<br>";
        
        }
    }
     
 echo  "</div>";
   
?>
        <h1> "Ficheros Del Club" </h1>
    <div class="formularios">

    <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario">
    <input type="text" name="dniNuevo" placeholder="DNI NUEVO"><br>
    <input type="submit" value="dni" name="Nuevo"><br>
    <div class="formulariosDos">
    <input type="text" name="dniSocio" placeholder="BUSCAR"><br>
    <input type="text" name="dniInvitado"placeholder="SUSTITUIR" ><br>
    <input type="submit" value="sustituir" name="sustituir"><br>
  </form>
</div>
</div>

<?php
    $arraydnis=unserialize(file_get_contents("nuevosarchivodnis.txt"));
    foreach($arraydnis as $dni){
        if($dni["ultimo"]==false){
            echo "<p>".$dni["dni"]."</p>";
        }else{
            echo '<p class="nuevo">'.$dni["dni"]."</p>";
        }
    }
    echo "<pre>";
    var_dump($arraydnis);
    echo "</pre>";
?>


</body>
</html