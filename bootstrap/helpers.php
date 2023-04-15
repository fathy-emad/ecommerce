<?php

use App\Constants\Constants;


/**
 *
 * get all validation error message of rules from lang file to pass them to js validator
 *
 * @param array $rules
 * @return string
 *
 */
if (! function_exists('getValidationErrorMessages')) {
    function getValidationErrorMessages(array $rules = []): string
    {

        $lang = app()->getLocale();

        $rulesFile = include "../lang/$lang/validation.php";

        foreach ($rules as $rule) {

            $explodeRule = explode(".", $rule);
            $ruleName = $explodeRule[0];
            $ruleType = $explodeRule[1] ?? '';

            $validationErrorMessages[$rule] = is_string($rulesFile[$ruleName]) ? $rulesFile[$ruleName] : $rulesFile[$ruleName][$ruleType];
        }

        return json_encode($validationErrorMessages ?? [], JSON_UNESCAPED_UNICODE);
    }
}


/**
 *
 * imploding error messages to view as string if found
 *
 * @param object $errors
 * @param string $inputName
 * @return string
 *
 *
 */
if (! function_exists('getValidationErrorMessage')) {
    function getValidationErrorMessage(object $errors, string $inputName): string
    {

        return $errors->get($inputName) ? implode(', ', $errors->get($inputName)) : '';
    }
}

/**
 *
 * set css class (is-invalid) to input if errors found
 *
 * @param object $errors
 * @param string $inputName
 * @return string
 *
 */
if (! function_exists('getValidationErrorClass')) {
    function getValidationErrorClass(object $errors, string $inputName): string
    {
        return $errors->get($inputName) ? 'is-invalid' : '';
    }
}


/**
 *
 * get specific constant
 *
 *
 * @param string $constant
 * @return Constants
 *
 *
 */
if (! function_exists('getConstant')) {
    function getConstant(string $constant): Constants
    {
        return new Constants($constant);
    }
}
