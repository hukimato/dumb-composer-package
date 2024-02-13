<?php

declare(strict_types=1);

namespace Hukimato\DumbComposerPackage;

class DumbClass
{
    public static function sayHello(string $name): void
    {
        echo "Hello $name from " . self::class . PHP_EOL;
    }
}