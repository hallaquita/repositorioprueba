<?php
session_start();
$pass_enc='$2y$10$JR7r0SETPRdfoh43yJFbgOLgxDNfIbSMgfdVv.u3i/asK3t0qmO7e';
$fichero='sugerenciass.txt';

if(!file_exists($fichero)){
    file_put_contents($fichero,serialize([]));
}

if(!isset($_SESSION["modo"])){
    $_SESSION["modo"]=1;
}
 $fechas_actual= date("j/n/Y - G:i:s");
 $sugerencia= "";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["borrar"])){
        $arraysugerencias=unserialize(file_get_contents($fichero));
        echo '<pre>';
        print_r($arraysugerencias);
        echo '</pre>';
        foreach($arraysugerencias as $sugerencia){
            if(count($sugerencia)>4){
                for($i=4;$i<count($sugerencia);$i++){
                    unlink($sugerencia[$i]);
                }
            }
        }
        file_put_contents($fichero,serialize([])); 

    }

    if(isset($_POST ["enviarSugerencia"]))
    {
        if(!empty($_POST["nom"])&&!empty($_POST["correo"])&&!empty($_POST["texto"]))
        {
            if(isset($_FILES['archivo']) && $_FILES['archivo']["error"]==0){
                $dd=$_FILES['archivo']['tmp_name'];
                $final='buzonDos/'.$_FILES['archivo']['name'];
                move_uploaded_file($dd,$final);
            }
            
            $contenido_a=[  $_SERVER["REMOTE_ADDR"],
                            htmlspecialchars($_POST["nom"]),
                            htmlspecialchars($_POST["correo"]),
                            htmlspecialchars($_POST["texto"]),
                        ];

            if(!empty($final)){
                $contenido_a[]=$final;
            }
            $arraysugerencias=unserialize(file_get_contents($fichero));
            $arraysugerencias[]=$contenido_a;
            file_put_contents($fichero,serialize($arraysugerencias)); 
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
        <link rel="stylesheet" href="estilosSerialize.css">
    </head>
    <body>

    <?php
    if($_SESSION["modo"]==1){
    ?>
         
          <h1> BUZÓN DE SUGERENCIA </h1>
        
        <div class="formularioUno">
    <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario"enctype="multipart/form-data" >
        <input type="text" name="nom" placeholder="Nombre"><br>
        <input type="email" name="correo" placeholder="correo"><br>
        <textarea maxlength="30" minlength="10"  name="texto" placeholder="Sugerencia"></textarea><br>
        <input type="file" name="archivo" ><br>
        <input type="submit" value="ENVIAR" name= "enviarSugerencia"><br>
        <input type="submit" value="login" name= "hacerlogin">
    </form>
    </div>
    <?php
    }elseif($_SESSION["modo"]==2){
        ?>
        <h1> LOGIN </h1>
        <div class="formularioDos">
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
        <div class="formularioTres">
            <h2> COMENTARIOS <h2>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario">
                <input type="submit" value="volver" name= "volver"> 
                <input type="submit" value="borrar" name= "borrar"> 
            </form>
        </div>
        <?php
        if(file_exists($fichero)){
            $arraysugerencias=unserialize(file_get_contents($fichero));
            foreach($arraysugerencias as $sugerencia){
                echo '<ol class="lista">';
                foreach($sugerencia as $clave=>$campo){
                    echo "<li >";
                    if($clave<=3){
                        echo $campo;
                    }else{
                        echo '<a download href="'.$campo.'">descargar</a>';
                    }
                    echo "</li>";
                }
                echo "</ol>";
            }
        }
    }
    ?>


</body>
</html