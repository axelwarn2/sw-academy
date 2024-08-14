<?php

include "framework/framework.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header('status: 302');
    header('location: /');
    exit();
}

try {
    $config = Framework\Config::getInstanse();
    $filePath = $API->getApiClass($config->getEnv('MAIN_TEMPLATE'));
    $instance = new $filePath();

    echo json_encode($instance($API->action, $API->payload));
} catch (\Exception $e) {
    header('status: 400');
    echo json_encode(["error" => $e->getMessage()]);
}
