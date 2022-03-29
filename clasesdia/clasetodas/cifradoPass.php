<?php
$login=false;

$correo="";
$pass="";
$correoe="";
$passe="";
$logine="";

$contraok=["hola","1234","5678"];
$mailok=["jose@gmail.com","luis@hotmail.com","Alex@yahoo.es"];
$contraokenc=[];
$caducidad=time()+(60*60);
setcookie("nombre","Alex",$caducidad );
setcookie("apellido","Alex",$caducidad );

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

$nombre=empty($_COOKIE["coca"])?"":$_COOKIE["coca"];
echo $nombre;

 for($i=0;$i<count($contraok); $i++){

    $contraokenc[$i]=password_hash($contraok[$i],PASSWORD_DEFAULT);


 }


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
        for($i=0;$i<count($contraokenc);$i++){
            if(password_verify($pass,$contraokenc[$i]) && $correo==$mailok[$i]){
                $login=true;
                $logine="";
                break;
            }else{
                $logine="no autorizado";
            }
        }
    }

}


/*
if(password_verify($contraok,$pwc)){
    echo $pwc;
}
*/
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <title>  </title>
        <link rel="stylesheet" href="estiloFormularioDos.css">
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
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