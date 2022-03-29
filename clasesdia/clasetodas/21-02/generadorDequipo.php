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





$todos=["pedro","juan","carlos","jose","luis","antonio","javier"];
$per_grupo=3;


/*echo "<Pre>";
Print_r (grupoPersona($per_grupo,$todos));
echo "</Pre>";
*/


if(empty($_SESSION ["nombre"])){
           $_SESSION["nombre"]=[];
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
      if(!empty($_POST["nom"]) && isset($_POST ["anadirParticipante"])){
           $_SESSION["nombre"][]=$_POST["nom"];

      }
    
}

  
 echo "<Pre>";
 Print_r (grupoPersona($per_grupo,$_SESSION));
 echo "</Pre>";
 





?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title>  </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
        <link rel="stylesheet" href="estilosLaboratorio.css">
    </head>
    <body>
        <h1> Generador de Equipo </h1>

        <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario">
            <input type="text" name="nom" placeholder="Nombre">
            <input type="submit" value=" añadir Participantes" name= "anadirParticipante">
            <input type="submit" value="siguiente paso" name= "siguienePaso">
            <input type="submit" value="reiniciar" name="reiniciarUno">
       </form>

       <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario">
            <input type="text" name="grupo" placeholder="personas por grupo">
            <input type="submit" value="crear grupo" name= "crerGrupo">
            <input type="submit" value="reiniciar" name="reiniciarDos">
       </form>
        
       <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario">
            <input type="email" name="correo" placeholder="correo">
            <input type="submit" value="enviar por e-mail" name= "mail">
            <input type="submit" value="reiniciar" name="reiniciarTres">
            
       </form>





    </body>
</html>        

