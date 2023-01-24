<?php
 namespace Danieliamorim\Testecomposer; // nome no composer.json */

 class Calculadora{
    public function soma(...$n){
        //return $num1 + $num2;
        return array_sum($n);
    }

    public function subtracao(float $num1, float $num2){
        return $num1 - $num2;
    }

    public function multiplicacao(float $num1, float $num2){
        return $num1 * $num2;
    }

    public function divisao(float $num1, float $num2){
        return $num1 / $num2;
    }
 }