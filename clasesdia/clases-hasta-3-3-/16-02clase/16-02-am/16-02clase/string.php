<!DOCTYPE html>
<html lang="es">
    <head>
        <meta chaset="utf-8">
        <title> frases </title>
        <meta name="keywords" content="pruebas">
        <meta name="description" content=" prueba pagina web">
        <meta name="author" content="LJR">
    </head>
    <body>
    
    <?php

        $frase="plou poc pero pel que plou plou prou";
        $palabra="plou";

        $longitudpalabra=strlen($palabra);
        $longitudfrase=strlen($frase);

        $inicioprimero=0;
        $finalprimero=strpos($frase,$palabra)+$longitudpalabra;

        $iniciosegundo=$finalprimero;
        $finalsegundo=strpos($frase,$palabra,$finalprimero)+$longitudpalabra;
        $numcaracteresrecorte2=$finalsegundo-$iniciosegundo;

        $iniciotercero=$finalsegundo;
        $finaltercero=$longitudfrase;
        $numcaracteresrecorte3=$finaltercero-$iniciotercero;


        $primerafrase=substr($frase,$inicioprimero,$finalprimero);
        $segundafrase=substr($frase,$iniciosegundo,$finalsegundo);
        $tercerafrase=substr($frase,$iniciotercero,$finaltercero);

        echo "<p>".$primerafrase."</p>";
        echo "<p>".$segundafrase."</p>";
        echo "<p>".$tercerafrase."</p>";

          
                
    ?>

    <?php
        $frasesb="el mundo cada día mejora mas pero, yo no quiero más contaminación";
        $palabrab="pero";
        $longitudfrasesb=strlen($frasesb);
        $longitudpalabrab=strlen($palabrab);
        $inicioprimera=0;
        $finalprimera=strpos($frasesb,$palabrab)+$longitudpalabrab;

        $iniciosegunda=$finalprimera;
        $finalsegunda=strpos($frasesb,$palabrab,$finalprimera)+$longitudpalabrab;
        $numerocaracter2=$finalsegunda-$inicioprimera;
       
        $iniciotercera=$finalsegunda;
        $finaltercera=$longitudpalabrab;
        $numerocaracter3=$finalsegunda-$finalprimera;




        $priemrafrasesb=substr($frasesb,$inicioprimera,$finalprimera);
        $segundafrasesb=substr($frasesb,$iniciosegunda,$finalsegunda);
        $tercerafrasesb=substr($frasesb,$iniciotercera,$finaltercera);

        echo "<b>".$priemrafrasesb. "</b>";
        echo "<b>".$segundafrasesb. "</b>"; 
        echo "<b>".$tercerafrasesb. "</b>";
         
     ?>  
     