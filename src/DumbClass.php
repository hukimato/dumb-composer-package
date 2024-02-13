<?php

namespace Hukimato\DumbComposerPackage;

class DumbClass
{
    public static function sayHello(): void
    {
        echo "Hello from " . self::class;
    }
}