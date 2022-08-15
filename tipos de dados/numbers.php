<?php
    /* Manipulação de Números */
    $valor = "150" + 20;
    var_dump($valor);

    $valor = 4 * 2.5;
    var_dump($valor);

    $valor_convertido = (int) $valor;
    var_dump($valor_convertido);

    $valor = "100";
    var_dump($valor);

    $valor = "2.5";
    $valor_convertido = (float) $valor;
    var_dump($valor_convertido);

    $valor1 = 100;
    $valor2 = 5.75;
    $valor3 = "teste";

    var_dump(is_int($valor1));
    var_dump(is_float($valor2));
    var_dump(is_numeric($valor1)); // função pra saber se é um número

?>