<?php
 $sugerencia= "";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST ["enviarSugerencia"]))
    {
        if(!empty($_POST["nom"])&&!empty($_POST["correo"])&&!empty($_POST["texto"]))
        {
            $sugerencia= (htmlspecialchars($_POST["nom"])).PHP_EOL.(htmlspecialchars($_POST["correo"])).PHP_EOL.(htmlspecialchars($_POST["texto"]));
            /*echo "<pre>";
            print_r ($sugerencia);
            echo "</pre>";*/
        }
    }

} 


if(file_exists("buzon/sugerenciaLuis.txt")){
   
    if( $enlace=fopen("buzon/sugerenciaLuis.txt","a"))
    {
        $ip=$_SERVER["REMOTE_ADDR"];

        $contenido = $sugerencia.PHP_EOL.$ip;
        fwrite($enlace, $contenido);
        fclose($enlace);
    }else{
        echo "El archivo no se pudo abrir";
    }
}else{
   if( $enlace=fopen("buzon/sugerenciaLuis.txt","w"))
   {
        $ip=$_SERVER["REMOTE_ADDR"];
        $contenido = $sugerencia.PHP_EOL.$ip;
        fwrite($enlace, $contenido);
        fclose($enlace);   
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
          <h1> BUZÓN DE SUGERENCIA </h1>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario">

    <input type="text" name="nom" placeholder="Nombre"> <br>

    <input type="email" name="correo" placeholder="correo"><br>
    
    <textarea maxlength="50" minlength="20"  name="texto" placeholder="Sugerencia"></textarea><br>

    <input type="submit" value="ENVIAR" name= "enviarSugerencia"> 

   </form>



</body>
</html