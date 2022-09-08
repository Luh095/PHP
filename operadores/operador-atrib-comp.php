<?php
// Operadores de Atribuição
$a = 10;
$b = 5;

$a = $a + $b;
echo $a;

$a += $b; // $a = $a + $b
echo $a;

$a *= $b; // $a = $a * $b
echo $a;


// Operadores de Comparação
if(10 == "10"):
    echo "Positivo";
else:
    echo "Negativo";
endif;
// !=
if(10 != 11):
    echo "Positivo";
else:
    echo "Negativo";
endif;
// ===
if(10 === 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;
// !==
if(10 !== 11):
    echo "Positivo";
else:
    echo "Negativo";
endif;
// <>
if(10 <> 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;
// <
if(10 < 9):
    echo "Positivo";
else:
    echo "Negativo";
endif;
// >
if(10 > 30):
    echo "Positivo";
else:
    echo "Negativo";
endif;
// >=
if(10 >= 1):
    echo "Positivo";
else:
    echo "Negativo";
endif;
// <=
if(10 <= 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;
// <=>
var_dump(20 <=> 2);
?>