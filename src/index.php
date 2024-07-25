<?php

include "framework/framework.php";

$navbarItems = [
    [
        "heading" => "Шкафы купе",
        "link" => "#",
    ],
    [
        "heading" => "Торговая мебель",
        "link" => "#",
    ],
    [
        "heading" => "Кухни",
        "link" => "#",
    ],
    [
        "heading" => "Контакты",
        "link" => "#",
    ],
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Мебель</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php $APPLICATION->includeComponent("header", ".default", ["logo" => "Мебель",
    "desk" => "Центр мебельных технологий",
    "navbar" => $navbarItems,
    "number" => "+7 3452 00-00-00",
    "header_button" => "Оставить заявку",
    ]);?>
</body>
</html>