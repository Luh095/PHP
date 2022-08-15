<?php
    //Variáveis
    $x = 10;
    $y = 5;

    function teste () {
        //global $x;
        global $x, $y, $z;
        $z = $x + $y;
        //echo "O valor de x dentro da função: $x";
    }

    teste();
    echo "<br>O valor de z fora: $z";
    //echo "<br>O valor de x fora da função: $x";
   //echo $x + $y;
?>