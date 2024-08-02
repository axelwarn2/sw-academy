<?php

namespace Framework\Validators;

use Framework\Model;
use Exception;

class ModelValidator
{
    public static function validateCreate(array $data, array $fillable): void
    {
        foreach ($fillable as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                throw new Exception("Заполните поле '{$field}'");
            }

            self::validateField($field, $data[$field]);
        }
    }

    public static function validateUpdate(array $data, array $fillable): void
    {
        foreach ($fillable as $field) {
            if (!isset($data[$field])  || empty($data[$field])) {
                throw new Exception("Заполните поле '{$field}' для обновления");
            }

            self::validateField($field, $data[$field]);
        }
    }

    // public static function duplicateEmail(string $email): void
    // {
    //     $query = "SELECT * FROM `users` WHERE email = :email";
    //     $stmt = CDatabase::getInstanse()->connection->prepare($query);
    //     $stmt->execute(['email' => $email]);
    //     $data = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    //     if (count($data["email"]) > 1) {
    //         throw new Exception("Пользователь с таким email уже существует");
    //     }
    // }

    public static function validateField(string $field, $value): void
    {
        if ($field === "name" && !preg_match('/^[0-9]{2, 15}$/', $value)) {
            throw new Exception("Длина должна быть меньше 15 символов");
        }

        if ($field === "email" && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Неправильный формат email");
        }

        if ($field === "password" && !preg_match('/^[A-Z][a-z]{3,9}[0-9]{3,9}$/', $value)) {
            throw new Exception("Пароль должен содержать:
                                1. Первым символом заглавную букву
                                2. От 3 до 9 прописных букв
                                3. От 3 до 9 цифр в конце");
        }
    }
}
