

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
    </head>
             <body>
               <title> formulario </title>
               <h2>Formulario </h2>
               <h3 tabindex="0"> Prueba formulario</h3><!--comentario -->
               <form action="pruebaFormularioPhp.php" method="post">
                  <p> Nombre </p>
                  <input type="text" name="Nombre">
                  <input type="submit" value="ENVIAR"> 
               </form>

                 <legend>Apellidos</legend>
                <form action="pruebaFormularioPhp.php" method="POST">
                    <fieldset>
                        <p> Apellidos </p>
                        <input type="text" name="Apellidos" value="Apellidos">
                        <input type="submit" value="ENVIAR">
                    </fieldset>
                </form>  
                
            </body>



            </html>