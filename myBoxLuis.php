<?php
session_start();
if(!isset($_SESSION['carpeta_actual'])){
    $_SESSION['carpeta_actual']='archivosClases';
}
// $_SESSION['carpeta_actual']='archivosClases';



if(isset($_POST ["SubirArchivos"]))
{

    if(!empty($_FILES["subir"]["name"][0]))
    {
        $nuemroArchivos= count($_FILES["subir"]["name"]);
        $todos=[];
        for($i=0;$i<$nuemroArchivos;$i++)
        {
            if($_FILES["subir"]["error"][$i]==0)
            {
                $dd=$_FILES['subir']['tmp_name'][$i];
                $final=$_SESSION['carpeta_actual']."/".$_FILES['subir']['name'][$i];
                $x=0;
                $nombreFichero=$_FILES['subir']['name'][$i];
                $bucarArchivo=true;
                while($bucarArchivo)
                {
                    if(!file_exists($final))
                    {
                        $bucarArchivo=false;

                    }else{
                        $x++;
                        $carpetaArchivo=$_SESSION['carpeta_actual']."/";
                        $nombreFichero_ant=substr($nombreFichero,strlen($nombreFichero)-4);
                        $x;
                        $final=substr($nombreFichero,strlen($nombreFichero)-4,4);
                        $final=$carpetaArchivo.$nombreFichero_ant.$x.$final;
                        $bucarArchivo=true;

                    }
                }
                        $todos[]=$final;
                         move_uploaded_file($dd,$final);           
            }
        } 
    } 
     

}

if(isset($_POST['abrir'])&&!empty($_POST['item'])){
    $_SESSION['carpeta_actual']=$_POST['item'];
}
if(isset($_POST['borrar'])&&!empty($_POST['item'])){
    unlink($_POST['item']);
}
if(isset($_POST['editar'])&&!empty($_POST['renombrar'])){
    rename($_POST['item'],$_POST['renombrar']);
} 
if(isset($_POST['atras'])){
    $_SESSION['carpeta_actual']=ruta_retroceder( $_SESSION['carpeta_actual']);
}
if(isset($_POST['crearCarpeta'])&&!empty($_POST['nombreCarpeta'])){
     $ruta=$_SESSION['carpeta_actual'].'/'.$_POST['nombreCarpeta'];
    if(!file_exists($ruta)){
        mkdir($ruta);
    }
}




?>







<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title> My Box Luis  </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content="My Box Luis">
        <meta name="author" content="LJR">
        <link rel="stylesheet" href="estilosMyBox.css">
    </head>
    <body>
         <h1><b> Archivos de Ejercicios <br> OPEN SOURCE BACKEND DEVELOP <b> </h1>
<div class=formulario>          
<?php
 $rutaglob=$_SESSION['carpeta_actual'].'/*';
 $archivosCarpeta=glob($rutaglob);
  echo '<ol>';
foreach($archivosCarpeta as $archivoCarpetas){
      echo"<li>";
      if(!is_dir($archivoCarpetas)){
        ?>

        <form action="" method="post">
          <input type="submit"  name="borrar" value="X" >
          <input type="hidden" name="item" value="<?php echo $archivoCarpetas ;?>">
          <span><?php echo $archivoCarpetas;?></span><br>
          <input type="submit" name="editar" value="E">
          <input type="text" name="renombrar" placeholder="Editar Nombre" value="<?php echo $archivoCarpetas;?>"><br>
         
          
      </form>
      <?php
      }else{
        ?>
        <form action="" method="post">
          <input type="submit" name="abrir" value="O">
          <span><b><?php echo $archivoCarpetas;?></b></span>
          <input type="hidden" name="item" value="<?php echo $archivoCarpetas ;?>">
        
         
        
      </form>
      <?php
      }
      echo "</li>";

}
  echo '</ol>';

/*
  pt($_POST);
  pt($_FILES);
  pt($_SESSION);
*/
?>

 
<form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" enctype="multipart/form-data" >
    <input type="submit" value="crear carpeta" name= "crearCarpeta" > 
    <input type="text" name="nombreCarpeta" placeholder="nombre de la carpeta"><br>
    <input type="file" name="subir[]" multiple><br>
    <input type="submit" value="Subir Archivos" name= "SubirArchivos">
    <input type="submit" value="retroceder" name= "atras">
</form>

</div>

</body>
</html>
<?php
function ruta_retroceder($ruta){
    $array=explode('/',$ruta);
    if(count($array)>1){
        array_pop($array);
    }
    return implode('/',$array);
}

function pt($cosa){
    echo '<pre>';
    print_r($cosa);
    echo '</pre>';
}

?>   