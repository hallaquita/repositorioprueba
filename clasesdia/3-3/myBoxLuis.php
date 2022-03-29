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

    <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="POST" class="formulario"enctype="multipart/form-data" >
        <input type="submit" value="crear carpeta" name= "crearCarpeta" > 
        <input type="text" name="crearCarpeta" placeholder="nombre de la carpeta"><br>
        <input type="file" name="fichero[]" multiple><br>
        <input type="submit" value="Subir Archivos" name= "SubirArchivos">
    </form>
    
         
          

  
 
  


</body>
</html