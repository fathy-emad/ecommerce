<?php

namespace App\Interfaces;

use ReturnTypeWillChange;

interface Constants
{
    public static function getArray(): array;

    public static function getValue($key): string;

}
