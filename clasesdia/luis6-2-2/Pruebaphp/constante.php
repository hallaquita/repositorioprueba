<?php
        // Valor de entrada
        
        $x=(2);
        define ("PI",pi());
        

        // Círculo
        $radio=$x;
        $diametro=($radio*2);
        $perimetro=($x*pi()*$radio);
        $area= round (pi()*($radio**2),2);
       
       
        echo ("Diámetro del círculo =");
        echo ($radio), "<br>";


        echo ("Perímetro del círculo =");
        echo round($perimetro, 2), "<br>";


        echo ("Area del círculo =");
        echo ($area),"<br><br>";

        //Numero Aureo
        define ("PHY",(1+sqrt(5))/2);

        //rectangulo áureo
        $b=$x;

        $a=(PHY*$b);

        $perimetro1=(($x*$b)*($x*PHY));

        $area1=($a*$b);

        echo("a=");
        echo($a),"<br>";

        echo ("PERIMETRO=");
        echo round($perimetro1,2), "<br>";

        echo ("Area=");
        echo round($area1,2),"<br><br>";

        //triangulo Aureo

        define ("ALTURA",sqrt($a**2)-(($b**2)/4));


        define ("AREAT",($b*ALTURA)/2);

        $ALTURA= ALTURA;
        echo ("Altura=");
        echo ($ALTURA),"<br>";


        $areat= AREAT;
        echo ("Area=");
        echo ($areat);


       






         
        









?>

