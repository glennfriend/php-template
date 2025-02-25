<?php

namespace App;

use Illuminate\Container\Container;

class AppServiceProvider
{
    public static function initialize(): Container
    {
        $container = new Container();
        // $container->bind(AppInterface::class, AppInstance::class);

        return $container;
    }
}
