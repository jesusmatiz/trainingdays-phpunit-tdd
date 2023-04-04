<?php declare(stric_types=1);
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;

final class PruebaTest extends TestCase {

    #[Test]
    #[TestDox('Prueba para sumar dos numeros enteros')]
    public function sumar(): void {

        $expected = 2;
        $actual = 1 + 1;

        $this->assertSame($expected, $actual, "La suma no es igual al esperado");
    }

}