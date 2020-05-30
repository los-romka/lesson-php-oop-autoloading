<?php

declare(strict_types=1);

namespace App;

class Plane implements \App\Animals\Flying\FlyingInterface
{
    public function fly(): string
    {
        return 'wzghooooh!';
    }
}
