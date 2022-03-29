<?php 
echo "<pre>";
print_r($_FILES);
echo "</pre>";

if(isset($_FILES['archivo'])){
    $dd=$_FILES['archivo']['tmp_name'];
    $final="imag/".$_FILES['archivo']['name'];
    move_uploaded_file($dd,'img/'.$_FILES['archivo']['name']);

    echo ($dd);
}
 

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title> Trasladar Fichero </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
    </head>
             <body>

             <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario" enctype="multipart/form-data" >
                <p> trasladar ficheros</p>
                <input type="file" name="archivo" >
                <input type="submit" value="ENVIAR"> 
               </form>  
              



            
             </body>



</html>














