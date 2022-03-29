<?php
session_start();

function grupoPersona($numPersona,$nombres){
    $grupos=[];
    while(count($nombres)>$numPersona){
        $grupo=[];
        for($x=0;$x<$numPersona;$x++){
            $posafortunado=rand(0,count($nombres)-1);
            $afortunadoarray=array_splice($nombres,$posafortunado,1);
            $grupo[]=$afortunadoarray[0];
        }
        $grupos[]=$grupo;
    }
    if(count($nombres)>0){
        $grupos[]=$nombres;
    }
    return $grupos;
}

  


/*$todos=["pedro","juan","carlos","jose","luis","antonio","javier"];*/
/*$per_grupo=3;*/


/*echo "<Pre>";
Print_r (grupoPersona($per_grupo,$todos));
echo "</Pre>";
*/


if(empty($_SESSION ["nombre"]) || isset($_POST["reiniciar"])){
    $_SESSION["nombre"]=[];
    $_SESSION["fase"]=1;
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST ["anadirParticipante"]))
    {
       if(!empty(htmlspecialchars($_POST["nom"])))
       {
          $_SESSION["nombre"][]=$_POST["nom"];
       }
    }
    elseif(isset($_POST ["siguientePaso"]))
    {
        $_SESSION["fase"]=2;
    }
    if(isset($_POST ["crearGrupo"]))
    {
        if(!empty(htmlspecialchars($_POST["grupo"])))
        {
            $_SESSION["personasPorGrupo"]=$_POST["grupo"];  
            $_SESSION["gruposhechos"]=grupoPersona( $_SESSION["personasPorGrupo"], $_SESSION["nombre"]);
            /*echo "<Pre>";
            Print_r ($_SESSION["gruposhechos"]);
            echo "</Pre>";*/

        }
        if(isset($_POST["crearGrupo"]))
        {
                $_SESSION["fase"]=3;
        }
    }
    elseif(isset($_POST["enviarMail"]) && !empty($_POST["correo"]) && filter_var($_POST["correo"],FILTER_VALIDATE_EMAIL))
    {   

        $destino= $_POST["correo"];
        $asunto="grupos";
        $cabecera="from:backend@training.cat";
        
        echo "<pre>";
        print_r($_SESSION["gruposhechos"]);
        echo "</pre>";

        $texto="";
        foreach($_SESSION["gruposhechos"] as $grupo){
            foreach ($grupo as $persona){
                $texto.= $persona."\r\n";
            }
            $texto.= "\r\n";
        }

        $confirmar=mail($destino,$asunto,$texto,$cabecera);
        var_dump($confirmar);

        foreach($_SESSION["gruposhechos"] as $grupo)
        {            
        echo "<ul>"; 
            foreach ($grupo as $persona)
            {
            echo "<li>{$persona}</li>";
            }
            echo "</ul>";
        }
    }
}
  
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title>  </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <link rel="stylesheet" href="estilosgeneradorDequipo.css">
    </head>
    <body class="fuera">
        <h1> Generador de Equipo </h1>
     <?php   
        switch ($_SESSION["fase"]) {
            case 1:   
                echo "<ul>"; 
                foreach($_SESSION["nombre"] as $nombreLista){
                    echo "<li>{$nombreLista}</li>";
                }  
                echo "</ul>";
                ?>
                <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario">
                    <input type="text" name="nom" placeholder="Nombre">
                    <input type="submit" value=" añadir Participantes" name= "anadirParticipante">
                    <input type="submit" value="siguiente paso" name= "siguientePaso">
                    <input type="submit" value="reiniciar" name="reiniciar">
               </form>
               <?php   
            break;
            case 2: 
                ?>
                <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario">
                    <input type="text" name="grupo" placeholder="personas por grupo">
                    <input type="submit" value="crear grupo" name= "crearGrupo">
                    <input type="submit" value="reiniciar" name="reiniciar">
                </form>
                <?php
            break;
            case 3:
                ?>
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" class="formulario">
                    <input type="email" name="correo" placeholder="correo">
                    <input type="submit" value="enviar por e-mail" name= "enviarMail">
                    <input type="submit" value="reiniciar" name="reiniciar">            
                </form>
                <?php
            break;
        }

     ?>  

    </body>
</html>        

