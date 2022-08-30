<?php
/* Funções functions () */
function EscreverMensagem(){
    echo "Olá tudo bom?";
}
// Call chamar a função
EscreverMensagem();

---------/* Exemplo 2 */---------
function Escrever($nome){
    echo "Olá tudo bom $nome?";
}

Escrever("Luana");

-------/* Exemplo 3 */----------
function Escrever($nome){
    echo "Olá tudo bom $nome? <br>";
}

Escrever("Luana");
Escrever("Daniela");
Escrever("Carolina");
Escrever("Geovanna");

-------/* Exemplo 4 */----------
function soma($valor1, $valor2){
    echo $valor1 + $valor2 . "<br>";
}

soma(10, 50);

soma(1245, 8345);

-------/* Exemplo 5 */----------
function soma($valor1, $valor2){
    return $valor1 + $valor2 ."<br>";
}

echo soma(10, 10);

-------/* Exemplo 6 */----------
function fazerCafe($tipo = "cappuccino"){
    return "Fazendo uma xícara de: $tipo <br>";
}

echo fazerCafe("expresso");
echo fazerCafe();
?>