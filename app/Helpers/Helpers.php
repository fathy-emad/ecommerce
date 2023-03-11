<?php

namespace App\Helpers;

class Helpers
{
    /**
     *
     * get validation error message from lang file to client side validation
     *
     * @param array $rules
     * @return string
     *
     */
    public static function getValidationErrorMessages(array $rules = []): string
    {

        $lang = app()->getLocale();

        $rulesFile = include "../lang/$lang/validation.php";

        foreach ($rules AS $rule) {

            $explodeRule = explode(".", $rule);
            $ruleName = $explodeRule[0];
            $ruleType = $explodeRule[1] ?? '';

            $validationErrorMessages[$rule] = is_string($rulesFile[$ruleName]) ? $rulesFile[$ruleName] : $rulesFile[$ruleName][$ruleType];
        }

        return json_encode($validationErrorMessages ?? [],JSON_UNESCAPED_UNICODE);
    }

    public static function getValidationErrorMessage(object $errors, string $inputName): string
    {
        if ($errors->get($inputName)) return implode(', ', $errors->get($inputName));
        return '';
    }

    public static function getValidationErrorClass(object $errors, string $inputName): string
    {
        if ($errors->get($inputName)) return 'is-invalid';

        return '';
    }
}
