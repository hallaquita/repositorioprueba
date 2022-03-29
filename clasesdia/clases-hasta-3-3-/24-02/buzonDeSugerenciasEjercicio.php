<?php
session_start();
$pass_enc='$2y$10$JR7r0SETPRdfoh43yJFbgOLgxDNfIbSMgfdVv.u3i/asK3t0qmO7e';



if(!isset($_SESSION["modo"])){
    $_SESSION["modo"]=1;
}

 $sugerencia= "";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST ["enviarSugerencia"]))
    {
        if(!empty($_POST["nom"])&&!empty($_POST["correo"])&&!empty($_POST["texto"]))
        {
            $contenido= $_SERVER["REMOTE_ADDR"]." ### ".(htmlspecialchars($_POST["nom"]))." ### ".(htmlspecialchars($_POST["correo"]))." ### ".(htmlspecialchars($_POST["texto"]).PHP_EOL);
            /*echo "<pre>";
            print_r ($sugerencia);
            echo "</pre>";*/

            if(file_exists("buzon/sugerenciaLuis.txt")){
   
                if( $enlace=fopen("buzon/sugerenciaLuis.txt","a"))
                {
                    fwrite($enlace, $contenido);
                    fclose($enlace);
                }else{
                    echo "El archivo no se pudo abrir";
                }
            }else{
               if( $enlace=fopen("buzon/sugerenciaLuis.txt","w"))
               {
                    fwrite($enlace, $contenido);
                    fclose($enlace);   
               }
            }
            
        }
    }elseif(isset($_POST["hacerlogin"])){
        $_SESSION["modo"]=2;

    }elseif(isset($_POST["volver"])){
        $_SESSION["modo"]=1;

    }elseif(isset($_POST["entrar"])&& !empty($_POST["nick"])&& !empty($_POST["pass"])){
        if($_POST["nick"]=="hola"&& password_verify($_POST["pass"],$pass_enc )){
            $_SESSION["modo"]=3;
        }

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

    <?php
    if($_SESSION["modo"]==1){
    ?>
          <h1> BUZÓN DE SUGERENCIA </h1>
    <div class="formularioUno">
    <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario"enctype="multipart/form-data">
        <input type="text" name="nom" placeholder="Nombre"><br>
        <input type="email" name="correo" placeholder="correo"><br>
        <textarea maxlength="50" minlength="20"  name="texto" placeholder="Sugerencia"></textarea><br>
        <input type="submit" value="ENVIAR" name= "enviarSugerencia"> 
        <input type="submit" value="login" name= "hacerlogin"> 
        <p> trasladar ficheros</p>
        <input type="file" name="archivo" >
        <input type="submit" value="ENVIAR"> 

    </form>
    </div>
    <?php
    }elseif($_SESSION["modo"]==2){
        ?>
        <h1> LOGIN </h1>
        <div class="formularioUno">
  <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario">
      <input type="text" name="nick" placeholder="nick"><br>
      <input type="password" name="pass" placeholder="pass"><br>
      <input type="submit" value="entrar" name= "entrar"> 
      <input type="submit" value="volver" name= "volver"> 

  </form>
  </div>
  <?php
    }elseif($_SESSION["modo"]==3){
        ?>
          <div class="formularioUno">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario">
        <input type="submit" value="volver" name= "volver"> 
  
    </form>
    </div>
    <?php
        if(file_exists("buzon/sugerenciaLuis.txt")){
   
            if( $enlace=fopen("buzon/sugerenciaLuis.txt","r"))
            {
                $todas=[];
                while($linea = fgets($enlace)){
                    $todas[]=explode(" ### ",$linea);
                }
                foreach($todas as $array){
                    echo '<div class="comentario">';
                    foreach ($array as $arrays){
        
                        echo $arrays."<br>";
                    }
                    echo "</div> <br>" ;
                }

                /*echo "<pre>";
                print_r($array); 
                echo "</pre>";
        
                echo "<br>";*/
               
                fclose($enlace);
            }else{
                echo "El archivo no se pudo abrir";
            }
        }


    }
    ?>


</body>
</html