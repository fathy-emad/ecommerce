<?php

namespace App\Helpers;

class Helpers
{
    public static function getValidationErrorMessages(array $rules): string
    {

        foreach ($rules AS $rule) $validationErrorMessages[] =  [$rule => __('formValidations.' . $rule)];
        $json_decode = json_encode($validationErrorMessages, JSON_UNESCAPED_SLASHES);
        return $json_decode;
    }
}
