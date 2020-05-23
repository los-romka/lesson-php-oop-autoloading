<?php

declare(strict_types=1);

namespace Animals\Flying;

use Animals\Animal;

class Bat extends Animal implements FlyingInterface
{
    public function say(): string
    {
        return 'quieee';
    }

    public function fly(): string
    {
        return 'im flying so high';
    }
}
