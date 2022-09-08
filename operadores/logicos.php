<?php
/*
    Operadores lógicos
    nos permitem fazer comparações entre expressões
    e (&& - and)
    ou (|| - or)
    ou exclusivo (xor)
    negação (!)
*/

$idade = 25;
$nome = "Leonardo";

if(($idade == 25) and ($nome == "Leonardo")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
// ||
if(($idade == 22) || ($nome == "Lucas")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
// or
if(($idade == 25) or ($nome == "Leonardo")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
// xor
if(($idade == 25) xor ($nome == "Leonardo")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
// !
if(($idade == 25) and ! ($nome == "Leonardo")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
?>