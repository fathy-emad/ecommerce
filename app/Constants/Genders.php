<?php

namespace App\Constants;

use App\Interfaces\Constants;

class Genders implements Constants
{
    protected const Genders = [
        0 => 'male',
        1 => 'female'
    ];

    public static function getArray(): array
    {
        return self::Genders;
    }

    public static function getValue($key): string
    {
        return self::Genders[$key];
    }
}
