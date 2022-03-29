<?php 
echo "<pre>";
print_r($_FILES);
echo "</pre>";

if(!empty($_FILES["fichero"]["name"])){
    $nuemroArchivos= count($_FILES["fichero"]["name"]);
    for($i=0;$i<$nuemroArchivos;$i++){
        if($_FILES["fichero"]["error"][$i]==0){
            $dd=$_FILES['fichero']['tmp_name'][$i];
            $final="img/".$_FILES['fichero']['name'][$i];
            move_uploaded_file($dd,$final);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title> adjuntar Multiples Archivos </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
    </head>
             <body>

             <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario" enctype="multipart/form-data" >
                <p> trasladar ficheros</p>
                <input type="file" name="fichero[]" multiple>
                <input type="submit" value="ENVIAR"> 
               </form>  
              



            
             </body>



</html>














