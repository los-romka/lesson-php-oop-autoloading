<?php

declare(strict_types=1);

function mySuperAutoloader($className)
{
    require_once __DIR__ . '/src/' . str_replace('\\', DIRECTORY_SEPARATOR, str_replace('App\\', '', $className)) . '.php';
}

spl_autoload_register('mySuperAutoloader');
