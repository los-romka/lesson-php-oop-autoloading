<?php

declare(strict_types=1);

namespace App\Animals;

abstract class Animal implements AnimalInterface
{
    abstract public function say(): string;
}
