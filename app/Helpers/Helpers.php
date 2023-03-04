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
    public static function getValidationErrorMessages(array $rules): string
    {
        foreach ($rules AS $rule) $validationErrorMessages[$rule] =  __('formValidations.' . $rule);

        return json_encode($validationErrorMessages,JSON_UNESCAPED_UNICODE);
    }
}
