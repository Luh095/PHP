<?php
    /*
        Tipos de Dados
        String [palavras]
        Integer [inteiro qualquer n não decimal]
        Float [decimal números decimais]
        Boolean [booleano - true e false]
        Array [matriz]
        Object [objeto]
        Null [nulo]
    */

    // String
    $exemplo1 = "Dimitri";
    $exemplo1 = "<h1>Olá mundo</h1>";

    var_dump($exemplo1);

    // Integer
    $exemplo2 = 345;
    $exemplo2_1 = 100;
    $inteiro = $exemplo2 + $exemplo2_1;

    echo $inteiro;

    var_dump($exemplo2);

    // Float
    $exemplo3 = 3.5;
    var_dump($exemplo3);

    // Boolean
    $professor_bonitao = true;
    var_dump($professor_bonitao);

    // Array (matrizes)
    $carros = array("Fusca", "Brasilia", "Chevette");
    var_dump($carros);

    // Object
    class carro {
        public $cor;
        public $modelo;
        public function __construct($cor, $modelo) {
            $this->cor = $cor;
            $this->modelo = $modelo;
        }
        public function mensagem(){
            return "O carro é $this->cor e o modelo é $this->modelo";
        }
    }

    $carro1 = new carro("Branco", "Fusca");
    $carro2 = new carro("Vermelho", "Ferrari");

    echo $carro1->mensagem();
    echo $carro2->mensagem();

    // Null
    $x = "oi"
    $x = null;
    var_dump($x);
?>