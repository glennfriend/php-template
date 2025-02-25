<?php

declare(strict_types=1);

require_once(__DIR__ . '/../vendor/autoload.php');
bootstrap();

use App\AppServiceProvider;
use App\Entry\Console\AppConsole;

$container = AppServiceProvider::initialize();

/**
 * @var AppConsole $app
 */
$app = $container->make(AppConsole::class);
$app->perform();
