<?php

namespace Framework\Validators;

use Framework\Errors\ValidatorError;

abstract class Validator
{
    protected static array $rules = [];
    protected static array $messages = [];
    protected static array $errors = [];

    public static function validate(array $data, array $rules): bool
    {
        static::$errors = [];

        foreach ($rules as $field => $rule) {
            if (!isset($data[$field])) {
                static::setError($field, static::$messages[$field] ?? "Заполните поле '{$field}'");
                continue;
            }

            if (!preg_match(static::$rules[$rule], $data[$field])) {
                static::setError($field, static::$messages[$field] ?? "Неверное поле '{$field}'");
            }
        }

        return empty(static::$errors);
    }

    protected static function setError(string $field, string $message): void
    {
        static::$errors[$field] = new ValidatorError($message);
    }

    public static function getErrors(): array
    {
        return static::$errors;
    }

    public static function hasErrors(): bool
    {
        return !empty(static::$errors);
    }
}