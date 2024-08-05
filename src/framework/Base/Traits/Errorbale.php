<?php

namespace Framework\Traits;

use Framework\Errors\ValidatorError;

trait Errorbale
{
    protected static array $errors = [];

    protected static function setError(string $field, string $message): void
    {
        static::$errors[$field] = new ValidatorError($message);
    }

    public function getErrors(): array
    {
        return static::$errors;
    }

    public function hasErrors(): bool
    {
        return !empty(static::$errors);
    }
}
