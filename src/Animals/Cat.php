<?php

declare(strict_types=1);

namespace Animals;

class Cat extends Animal
{
    public function say(): string
    {
        return 'Mew';
    }
}
