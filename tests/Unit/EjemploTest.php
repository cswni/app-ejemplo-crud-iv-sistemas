<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class EjemploTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $numero1 = 5;
        $numero2 = 8;

        $resultado = $numero1 > $numero2;

        //False
        $resultados = 8 > 5;


        $this->assertTrue($resultados);
    }
}
