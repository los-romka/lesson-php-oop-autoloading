<?php

declare(strict_types=1);

namespace App\Animals;

class Dog extends Animal
{
    public function say(): string
    {
        return 'Wwuf';
    }
}
