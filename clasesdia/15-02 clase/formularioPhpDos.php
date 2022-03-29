<?php
$nombre="";
if($_SERVER["REQUEST_METHOD"])
{
    echo "<pre>";
    print_r ($_POST);
    echo "</pre>";
}
if(isset($_POST["nom"])){
    $nombre=$_POST["nom"];

   
}
   
     
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <title> formularioPhpDos </title>
        <link rel="stylesheet" href="estiloFormulario.css">
    </head>
             <body>
                 
                <div class="fuera">
               <h2>Formulario </h2>
               <h3 tabindex="0"> Prueba formulario</h3>
               
               <form action="/formularioPhpDos.php" method="POST">
                    <p> Hombre  </p>

                     <label for="Nombre">Nombre y Apellidos</label><br>
                     <input type="text" class="
                     <?php
                     if(empty($nombre)){
                         echo "rojo";
                     }
                     
                     ?>
                     " name="nom" id="Nombre" value="<?php echo $nombre; ?>"><br>
                    

                    <p> Hombre  </p>
                    <input type="radio" name="sexo" value="Hombre"
                    <?php 
                        if(isset($_POST["sexo"]) && ($_POST["sexo"]=="Hombre"))
                        {
                            echo "checked";
                        } 
                    ?>
                    >
                    <p> Mujer  </p>
                    <input type="radio" name="sexo" value="Mujer"
                    <?php 
                        if(isset($_POST["sexo"]) && ($_POST["sexo"]=="Mujer"))
                        {
                            echo "checked";
                        }
                    
                    ?>
                    >

                    <p> quiero patatas    </p>
                    <input type="checkbox" name="fritas" <?php 
                        if(isset($_POST["fritas"]))
                        {
                            echo "checked";
                        }
                    ?>
                    >
                    <br>
                    <input type="submit" value="ENVIAR" > 
                 </form>


               
                
            </body>



            </html>