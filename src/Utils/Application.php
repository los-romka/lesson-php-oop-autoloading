<?php

declare(strict_types=1);

namespace App\Utils;

use App\Animals\Flying\Bat;
use App\Animals\Flying\Cock;
use App\Animals\Flying\FlyingInterface;
use App\Plane;

class Application
{
    private \Twig\Environment $twig;

    public function __construct()
    {
        $this->twig = new \Twig\Environment(
            new \Twig\Loader\FilesystemLoader([dirname(__DIR__, 2) . '/templates'])
        );
    }

    public function run(): void
    {
        $bat = new Bat();

        $animals = [
            new \App\Animals\Dog(),
            new \App\Animals\Cat(),
            new Cock(),
            $bat
        ];

        $plane = new Plane();

        $path = explode('?', $_SERVER['REQUEST_URI'] ?? '')[0] ?? null;

        if ($path === '/form') {
            echo $this->twig->render('form.twig', [
                'name' => 'Roman',
            ]);
        } elseif ($path === '/personal') {
            echo $this->twig->render('personal.twig', [
                'name' => 'Roman',
                'sum' => isset($_GET['a'], $_GET['b']) ? (int)$_GET['a'] + (int)$_GET['b'] : 0,
            ]);
        } else {
            echo $this->twig->render(
                'index.twig',
                [
                    'animals' => $animals,
                    'bat' => $bat,
                    'plane' => $plane,
                ]
            );
        }
    }
}
