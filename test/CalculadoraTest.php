<?php

namespace Tests\Unit;

use Danieliamorim\Testecomposer\Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {

        $calc = new Calculadora();


        $this->assertEquals(10,$calc->soma(1,9));

        $this->assertEquals(10,$calc->soma(10,90,55));
    }
}
