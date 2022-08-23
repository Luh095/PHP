<?php
/* CONSTANTES */
define("exemplo", "oi");

//echo exemplo;

function teste() {
    echo exemplo;
}

teste();

define("carros", ["fusca", "gol", "uno"]);

echo carros[1];
?>