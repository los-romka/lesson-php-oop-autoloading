<?php

declare(strict_types=1);

namespace Utils;

use Animals\Flying\Bat;
use Animals\Flying\Cock;
use Animals\Flying\FlyingInterface;
use Plane;

class Application
{
    public function run(): void
    {
        $dog = new \Animals\Dog();
        echo PHP_EOL . $dog->say();

        $cat = new \Animals\Cat();
        echo PHP_EOL . $cat->say();

        $cock = new Cock();
        echo PHP_EOL . $cock->say();

        $bat = new Bat();
        $plane = new Plane();

        $this->testFly($bat);
        $this->testFly($plane);
    }

    private function testFly(FlyingInterface $flying): void
    {
        echo PHP_EOL . 'test: ' . $flying->fly();
    }
}
