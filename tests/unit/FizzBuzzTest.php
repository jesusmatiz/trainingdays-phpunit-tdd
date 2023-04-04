<?php declare(stric_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;

use Src\FizzBuzz;

final class FizzBuzzTest extends TestCase {

    /**
     * Devuelve Fizz sil el numero es divisible por 3
     * Devuelve Buzz si el numero es divisible por 5
     * Devuelve FizzBuzz si el numero es divisible por 3 y por 5
     */
    #[Test]
    #[TestDox('Prueba de fizz buzz')]
    public function fizz_buzz(): void {

        // Setup
        $fb = new FizzBuzz();

        // Acción
        $actual = $fb->generateOutput(15);

        // Afirmación o comprobacion
        $expected = ["1", "2", "Fizz", "4", "Buzz", "Fizz", "7", "8", "Fizz", "Buzz", "11", "Fizz", "13", "14", "FizzBuzz"];
        $this->assertEquals($expected, $actual);
    }

}