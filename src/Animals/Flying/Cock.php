<?php

declare(strict_types=1);

namespace Animals\Flying;

use Animals\Animal;

class Cock extends Animal implements FlyingInterface
{
    public function say(): string
    {
        return 'mid or feed';
    }

    public function fly(): string
    {
        return 'im flying lower than you';
    }
}
