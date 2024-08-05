<?php

namespace Framework\Validators;

class UserValidator extends Validator
{
    protected static array $messages = [
        "name" => "Длина имени должна быть от 2 до 15 символов",
        "email" => "Неправильный формат email",
        "password" => "Пароль должен содержать:
                        1. Первым символом заглавную букву
                        2. От 3 до 9 прописных букв
                        3. От 3 до 9 цифр в конце",
    ];

    protected static array $rules = [
        "name" => "/^[A-Za-zА-Яа-яЁё]{2,15}$/",
        "email" => "/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i",
        "password" => "/^[A-Z][a-z]{3,9}[0-9]{3,9}$/",
    ];

    public static function validateUser(array $data): bool
    {
        return parent::validate($data);
    }
}
