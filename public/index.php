<?php

use App\Utils\Application;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require_once dirname(__DIR__) . '/vendor/autoload.php';

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler(dirname(__DIR__) . '/var/log/my.log', Logger::WARNING));

try {
    $app = new Application();
    $app->run();
} catch (Exception | Error $exception) {
    $log->error($exception->getMessage());
}
