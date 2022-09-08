<?php
/*
=> is_array($array) = verifica se uma determinada variável é um array
=> in_array($valor, $array) = verifica se um determinado valor exite em alguma posição do array
=> array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro
=> array_values($array) = retorna um novo array com os valores de array passado como parâmetro
=> array_merge($array1, $array2) = agrega  o conteúdo dos dois arrays
=> array_pop($array) = exclui a primeira posição do array
=> array_shift($array) = exclui a primeira posição do array
=> array_unshift($arr, "valor") = adiciona um ou mais elementos no início do array
=> array_push($array, "valor", "valor") = adiciona um ou mais elementos no final de um array
=> array_combine($keys, $values) = mescla os dois arrays passados
=> array_sum() = calcula a soma dos elementos de um array
=> explode("/", "20/01/2001") = transforma string em array
=> implode("-", $arr) = transforma array em string
*/

$nomes = array("Amiga" => "Daniela", "Amigo" => "Bruno", "Irmã" => "Laura", "Prima" => "Brunna");

echo is_array($nomes);

var_dump(is_array($nomes));

if(is_array($nomes)):
    echo "é um array";
else:
    echo "não é um array";
endif;

echo in_array("Daniela", $nomes);

$keys = array_keys($nomes);
print_r($keys);

$values = array_values($nomes);
print_r($values);

// Exemplo 2
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");

$veiculos = array_merge($carros, $motos);

print_r($veiculos);

$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
array_pop($carros);
echo "<br>";
print_r($carros);

$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo "<br>";
echo array_pop($carros);
echo "<br>";
print_r($carros);

$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo "<br>";
echo array_shift($carros);
echo "<br>";
print_r($carros);

// Exemplo 3
$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_unshift($frutas, "Manga", "Acerola", "Morangp");
echo "<br>";
print_r($frutas);

$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_push($frutas, "Manga", "Acerola", "Morangp");
echo "<br>";
print_r($frutas);

$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Vasco", "Flamengo", "Botafogo");

$times = array_combine($keys, $values);
print_r($times);

// Exemplo 4 
$soma = array(5, 6, 10, 8);
echo array_sum($soma);


$soma = array(7.8, 5.5, 10, 7.2);
$total = array_sum($soma);
echo array_sum($soma);

// Exemplo 5
$data = "30/02/2028";

$novaData = explode('/', $data);

print_r($novaData);


$frase = "meu nome não é johnny";

$array = explode(" ", $frase);

print_r($array);

// Exemplo 6
$nomes = array("Daniela", "Ana", "Peter", "Leonardo");

$string = implode(", ", $nomes);

echo $string;
?>