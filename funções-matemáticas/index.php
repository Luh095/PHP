<?php
/* FUNÇÕES MATEMÁTICAS BÁSICAS*/
$a = 10;
$b = 5;

$resultado = $a + $b; // soma
$resultado = $a - $b; // subtração
$resultado = $a * $b; // multiplicação
$resultado = $a / $b; // divisão

/* Operações Matemáticas em PHP */
echo pi();

$numeros = [1, 10, 40, 5000, -20, 15];

echo min($numeros);
echo max($numeros);

$numeros = -20;

echo abs($numeros); //absolute - mostra o valor positivo de um número

echo sqrt(81); // para fazer a raiz quadrada

$numero = 10.65;

echo round($numero); // faz o arredondamento do número

echo rand(); // gera um número randômico, um número aleatório

echo rand(1, 10); // gera um number aleatório entre dois numbers
?>