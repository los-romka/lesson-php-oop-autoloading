<?php

declare(strict_types=1);

class Plane implements \Animals\Flying\FlyingInterface
{
    public function fly(): string
    {
        return 'wzghooooh!';
    }
}
