<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Src\StubClass;
use Src\Dependency;

final class StubClassTest extends TestCase {

    #[Test]
    #[TestDox('Prueba con stub')]
    public function prueba_stub(): void {

        // Setup
        $stub = new StubClass;

        $dependency = $this->createStub(Dependency::class);
        $dependency->method('doSomething')
                   ->willReturn('foo');

        // Accion
        $result = $stub->doSomething($dependency);

        // Afirmaciòn
        $this->assertEquals("Valido", $result);

    }

}