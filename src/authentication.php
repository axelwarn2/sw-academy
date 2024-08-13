<?php

include "framework/framework.php";

$arResultHeader = [
    "logo" => "МЕБЕЛЬ",
    "desk" => "Центр мебельных технологий",
    "navbar" => [
        ["heading" => "Шкафы купе", "link" => "#", ],
        ["heading" => "Торговая мебель", "link" => "#", ],
        ["heading" => "Кухни", "link" => "#", ],
        ["heading" => "Контакты","link" => "#", ],
    ],
    "number" => "+7 3452 00-00-00",
    "headerButton" => "Оставить заявку",
];

$arResultFooter = [
    "foot_title" => "МЕБЕЛЬ",
    "foot_subtitle" => "Центр мебельных технологий",
    "foot_button" => "Авторизоваться",
    "menuname" => "Меню",
    "contactname" => "Контакты",
    "menu" => [
        ["heading" => 'Шкафы купе'],
        ["heading" => "Кухни"],
        ["heading" => "Торговое оборудование"],
        ["heading" => "О компании"],
        ["heading" => "Контакты"],
    ],
    "contact" => [
        ["heading" => 'info@mebel.ru'],
        ["heading" => 'г.Тюмень, ул. Калинина, 22/1'],
        ["heading" => '+7 (3452) 00-00-00'],
    ],
    "bottom" => [
        ["heading" => '2024 “Мебель.ру” Все права защищены.'],
        ["heading" => 'Политика конфиденциальности'],
        ["heading" => 'Разработка сайта интернет компания “SunWeb”'],
    ],
];

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

$footerMenuItems = [
    [
        "heading" => 'Шкафы купе',
    ],
    [
        "heading" => "Кухни",
    ],
    [
        "heading" => "Торговое оборудование",
    ],
    [
        "heading" => "О компании",
    ],
    [
        "heading" => "Контакты",
    ],
];

$footerContactItems = [
    [
        "heading" => 'info@mebel.ru',
    ],
    [
        "heading" => 'г.Тюмень, ул. Калинина, 22/1',
    ],
    [
        "heading" => '+7 (3452) 00-00-00',
    ],
];

$footerBottomItems = [
    [
        "heading" => '2024 “Мебель.ру” Все права защищены.',
    ],
    [
        "heading" => 'Политика конфиденциальности',
    ],
    [
        "heading" => 'Разработка сайта интернет компания “SunWeb”',
    ],
];

$APPLICATION->setCSS([
    "header" => ".default",
    "footer" => ".default",
    "authentication" => ".default",
]);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=$APPLICATION->showCSS();?>
    <title>Авторизация</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
    <?php $APPLICATION->includeHeader($arResultHeader);?>

    <?php $APPLICATION->includeComponent("authentication", ".default", [
        "auth_title" => "Авторизация",
        "auth_button" => "Войти",
    ]);?>

    <?php $APPLICATION->includeFooter($arResultFooter);?>
</body>
</html>
