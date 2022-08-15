<?php
    /* Manipulação de Strings */
    //$palavra = "Beleza pessoal";
    $palavra = "Uma frase comprida para ver quantas tem!"

    // strlen()
    echo strlen($palavra);

    // str_word_count()
    echo str_word_count($palavra);

    // strrev()
    echo strrev('Luana');

    // strpos()
    echo strpos("Oi tudo bom", "tudo");

    // str_replace()
    $palavra = "ola mundo";
    echo str_replace("Luana", "mundo", $palavra);

    $data = "25-08-2021"; 
    $data_formatada = str_replace("-", "/", $data);

    echo $data_formatada;

    echo "Data antiga: $data <br> Data formatada: $data_formatada";
?>