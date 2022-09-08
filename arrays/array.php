<?php
// Arrays
$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
echo $carros[10];
echo "<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
echo "<br>";

$clientes = ["Rodrigo", "Felipe", "Bia"]
print_r($clientes);
echo "<br>";


// Count
echo count($carros);
echo count($motos);
echo count($clientes);

$totalClientes = count($clientes); // atribuição
echo $totalClientes;
echo "<br>"

// Arrays associativos
$pessoa = array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);
echo $pessoa["nome"];

$pessoa = array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);
$pessoa["cidade"] = "Itabuna";
print_r($pessoa);

$pessoa = array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);
$pessoa["cidade"] = "Itabuna";

foreach($pessoa as $indice => $valor) {
    echo $indice. ":".$valor."<br>";
}

// Arrays multidimensionais
$times = array(
    "cariocas" => array("campeao" => "vasco", "vice" => "flamengo", "terceiro "=> "botafogo"),
    "paulistas" => array("santos", "sao paulo", "palmeiras"),
    "baianos" => array("bahia", "vitoria", "itabuna")
);
echo $times["cariocas"][0];
echo "<br>";

foreach($times["cariocas"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}
?>