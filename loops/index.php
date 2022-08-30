<?php

/*                  Loops (Laços de repetição)
    Usado quando vc deseja que o mesmo bloco de código seja executado repetidamente um determinado número de vezes.
    Em vez de adicionar várias linhas de código quaase iguais em um script, podemos usar loops.

    Principais no PHP

    while -> repete enquanto a condição for true.

    do...while -> executa um bloco, e depois repete o loop desde que a condição seja verdadeira.

    for -> repete um determinado número de vezes.

    foreach -> executa algo para cada item dentro de uma matriz.
*/

// While
$x = 1;

while ($x <= 5){
    echo "O número é: $x <br>";
    $x++;
}
--------------------------------
$x = 0;

while ($x <= 100){
    echo "O número é: $x <br>";
    $x+=10;
}

// Do...While
$x = 1;

do {
    echo "O número é: $x <br>";
    $x++;
} while ($x <= 5);

// For
for ($x = 0; $x <= 10; $x++){
    echo "O número é: $x <br>";
}
-------------------------------
for ($x = 0; $x <= 1000; $x++){
    echo "$x <br>";
}

// Foreach
$cores = ["azul", "amarelo", "verde", "vermelho"];

foreach ($cores as $valor){
    echo "A cor é $valor <br>";
}
?>