<?php
if(isset($_POST["Nuevo"])){
  $contenido= (htmlspecialchars($_POST["dniNuevo"]));
  if(file_exists("dni/dni.txt")){
    if($enlace=fopen("dni/dni.txt","a")){
        fwrite($enlace, ",".$contenido);
       
    }

  }
    

}
   


 

if(isset($_POST["sustituir"])){
    if(file_exists("dni/dni.txt")){
        if($enlace=fopen("dni/dni.txt","r+")){
            while($dni=fread($enlace,10)){
                $dni_limpio=trim($dni,",");
                if($dni_limpio==$_POST["dniSocio"]){
                    $encontrado=true;
                    echo $dni_limpio." encontrado!";
                    break;
                }
            }
        }
    }
}

if(isset($_POST["sustituir"])&&!empty($_POST["dniInvitado"])){
    if(isset($encontrado)){
        echo "<br>".ftell($enlace)."hshsh";
        fseek($enlace,-9,SEEK_CUR);
        echo ftell($enlace);
        fwrite($enlace,$_POST["dniInvitado"]);
    }
}        




?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title> Buzon de sugerencias  </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <link rel="stylesheet" href="estilosBuzon.css ">
    </head>
    <body>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario">
    <input type="text" name="dniNuevo" placeholder="DNI NUEVO"><br>
    <input type="submit" value="dni" name="Nuevo"><br>
    <input type="text" name="dniSocio" placeholder="BUSCAR"><br>
    <input type="text" name="dniInvitado"placeholder="SUSTITUIR" ><br>
    <input type="submit" value="sustituir" name="sustituir"><br>
  </form>



</body>
</html