<?php

namespace App\Constants;

use App\Interfaces\Iconstants;

class Genders implements Iconstants
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
