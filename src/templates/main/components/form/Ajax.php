<?php

namespace App\templates\main\components\form;

use Framework\CUser;
use Exception;

class Ajax
{
    public function __invoke(string $name, ...$arguments)
    {
        $name .= "Action";

        if (!method_exists(self::class, $name)) {
            throw new Exception("Action not found");
        }

        return $this->$name(...$arguments);
    }

    public function createAction(array $payload = null): array
    {
        if (empty($payload)) {
            throw new Exception("Payload empty");
        }

        $user = CUser::create($payload);
        return ['id' => $user->getId()];
    }
}
