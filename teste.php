<?php

use Danieliamorim\Testecomposer\Calculadora;

require __DIR__."/vendor/autoload.php"; //incluir os arquivos no composer.json

$calculadora = new Calculadora();

echo $calculadora->soma(3,50),"\r\n";

