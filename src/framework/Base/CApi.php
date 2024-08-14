<?php

namespace App\framework\Base;

use Framework\CDatabase;

class CApi
{
    const API_CLASS_NAME = "Ajax";
    private array $request = [];

    public function __get(string $name)
    {
        return $this->request[$name] ?? null;
    }

    public function __construct()
    {
        $this->request = $this->getRequest();
    }

    public function getApiClass($template = null)
    {
        $path = 'App';
        $class = self::API_CLASS_NAME;
        $component = $this->request['component'] ?? null;

        $templateClass = "{$path}\\templates\\main\\components\\{$component}\\{$class}";
        $defaultClass = "{$path}\\components\\{$component}\\{$class}";

        return match (true) {
            class_exists($templateClass) => $templateClass,
            class_exists($defaultClass) => $defaultClass,
            default => throw new \Exception($templateClass)
        };
    }

    public function getRequest(): array
    {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            $this->request = $_GET;
        }

        return [
            ...json_decode(file_get_contents("php://input"), true) ?? [],
            ...$_REQUEST,
        ];
    }
}
