<?php
$nombre="Luis";
$apellido1="Ramirez";
$apellido2="Exposito";
$edad= "20";
$localidad="Viladecans";



$pueblo1="Viladecans";
$pueblo2="Gava";
$pueblo3="Casteldefels";
$apellidook1="Exposito";
$apellidook2="Cruz";
$apellidook3="de la Cruz";



$edadok=($edad<22) && ($edad>18);
$localidadok=(($localidad)==($pueblo1)) || (($localidad)==($pueblo2)) || (($localidad)==($pueblo3));
$apellidosok1 = ($apellido1==$apellidook1) || ($apellido1==$apellidook2) || ($apellido1==$apellidook3);
$apellidosok2 = ($apellido2==$apellidook1) || ($apellido2==$apellidook2) || ($apellido2==$apellidook3);

$resultado= ($edadok && $localidadok && ($apellidook1 || $apellidook2));

echo "<br>Cumple edad";
var_dump ($edadok);
echo "<br>Cumple localidad";
var_dump ($localidadok);
echo "<br>Cumple apellido1";
var_dump ($apellidosok1);
echo "<br>Cumple apellido2";
var_dump ($apellidosok2);
echo ($resultado);
echo "<br>Cumple todo";












?>