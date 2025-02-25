<?php

namespace App\Entry\Console;

readonly class AppConsole
{
    public function __construct()
    {
    }

    public function perform(): void
    {
        echo 'hello world';
    }
}
