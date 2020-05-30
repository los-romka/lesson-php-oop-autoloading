<?php

declare(strict_types=1);

namespace App\Animals\Flying;

use App\Animals\Animal;

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
