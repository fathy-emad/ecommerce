<?php

use App\Constants\Constants;
use Illuminate\Support\Facades\Route;

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

/**
 *
 * get sidebar menu routes
 *
 * @return array
 */
if (! function_exists('getSideMenu')) {
    function getSideMenu(): array
    {
        $policies = ['profile', 'systemAdministrator'];
        $routes = collect(Route::getRoutes())->map(function ($route) {

            $explode = explode('/', $route->uri());
            $guard = $explode[0] ?? '';
            $main = $explode[1] ?? '';
            $sub = $explode[2] ?? '';
            $page = $explode[3] ?? '';
            $param = $explode[4] ?? '';

            if($route->methods()[0] == 'GET' && $guard == 'admin')
            {
                return [
                    'main' => $main,
                    'sub' => $sub,
                    'page' => $page,
                    'param' => $param
                ];
            }
        });

        foreach ($routes AS $route) {

            if ($route && in_array($route['main'], $policies))
            {
                $return[$route['main']][$route['sub']][] = $route['page'];
            }
        }
        return $return;
    }
}
