<?php declare(strict_types=1);

namespace Src;

use Src\Dependency;

class StubClass {

    public function doSomething(Dependency $dependency) {

        $v = $dependency->doSomething();
        $resp = "";

        if ($v == "foo") {
            $resp = "Valido";
        } else if ($v == "baz") {
            $resp = "Baz";
        }

        return $resp;
    }

}

