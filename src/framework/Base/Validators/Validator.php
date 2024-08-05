<?php

namespace Framework\Validators;

use Framework\Errors\ValidatorError;
use Framework\Traits\Errorbale;

abstract class Validator
{
    use Errorbale;

    protected static array $rules = [];
    protected static array $messages = [];
    protected static array $errors = [];

    public static function validate(array $data): bool
    {
        static::$errors = [];

        foreach (static::$rules as $field => $rule) {
            if (!preg_match($rule, $data[$field])) {
                static::setError($field, static::$messages[$field]);
            }
        }

        return empty(static::$errors);
    }
}
