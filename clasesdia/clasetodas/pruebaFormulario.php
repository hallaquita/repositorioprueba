
<?php
 echo $_SERVER["REQUEST_METHOD"]."<br>";

 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
     print_r($_POST);
    if(isset($_POST["Nombre"])){
        echo $_POST["Nombre"];

        echo empty($_POST);

    }
    }else
    {
      echo "no he recibido nada";
 } 
      $nombre=("nada");
      echo $nombre;
 

     
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <title> formularioPhp </title>
        <link rel="stylesheet" href="estiloFormulario.css">
    </head>
             <body>
                 
                <div class="fuera">
               <h2>Formulario </h2>
               <h3 tabindex="0"> Prueba formulario</h3><!--comentario -->
               
               <form action="pruebaFormulario.php" method="post">
                  <p> Nombre </p>
                  <input type="text" name="Nombre" value="<?php echo $nombre; ?>"> 
                  <input type="submit" value="ENVIAR"> 
               </form>

                 <legend>Apellidos</legend>
                <form action="pruebaFormulario.php" method="POST">
                    <fieldset>
                        <p> Apellidos </p>
                        <input type="text" name="Apellidos">
                        <input type="submit" value="ENVIAR">
                    </fieldset>
                </form> 
                 </div> 
                
            </body>



            </html>