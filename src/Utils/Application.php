<?php

declare(strict_types=1);

namespace App\Utils;

use App\Animals\Flying\Bat;
use App\Animals\Flying\Cock;
use App\Animals\Flying\FlyingInterface;
use App\Plane;

class Application
{
    public function run(): void
    {
        $dog = new \App\Animals\Dog();
        echo PHP_EOL . $dog->say();

        $cat = new \App\Animals\Cat();
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
