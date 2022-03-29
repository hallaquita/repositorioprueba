<?php
$login=false;

$correo="";
$pass="";
$correoe="";
$passe="";
$logine="";

$contraok="hola";
$mailok="jose@gmail.com";



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    echo "<pre>";
    print_r ($_POST);
    echo "</pre>";

    if(!empty($_POST["correo"])){
        if(filter_var ($_POST["correo"],FILTER_VALIDATE_EMAIL)){
            $correo=$_POST["correo"];
        }else{
            $correoe="correo invalido";
        }
    }else{
        $correoe="correo vacio";

    }
    if(!empty($_POST["contrasena"])){
        $pass=$_POST["contrasena"];
    }else{
        $passe=" contraseña vacia ";
    }

    if(!empty($correo) && !empty($pass)){
        if($pass==$contraok && $correo==$mailok){
            $login=true;
        }else{
            $logine="no autorizado";
        }
    }

}
  
  

?>




<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <title>  </title>
        <link rel="stylesheet" href="estiloFormulario.css">
    </head>
    <body>
          <h1> Formulario </h1><br>
           
        
<?php
   
if($login){
    echo '<div class=" fuera">';
    echo '<div class="formula">';

    
   
    echo  '<a href="pagformulaCocacola.html"><img src="formulacocaCola.jfif" alt="formulacocaCola" height="400" width="300"></a>';

    echo "</div>";
    echo "</div>";
  

    
}else{
    ?>
    <div class=" img">
    <form action="comprobarMail_url.php" method="post">
                    <p> Tu mail </p>
                    <input class="<?php echo !empty($correoe)?"error":"" ?>" type="email" name="correo" placeholder="email">
                    <p> Contraseña </p>
                    <input class="<?php echo !empty($passe)?"error":"" ?>" type="password" name="contrasena" placeholder="password"><br>
                    <input type="submit" value="ENVIAR"> 
     </form>
    </div>
<?php
} 
?>
                   
    </body>
 </html>