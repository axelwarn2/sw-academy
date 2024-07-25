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

$kitchenTypeItems = [
    [
        "image" => ["src" => 'image/line1.jpeg', "alt" => "Линейные"],
        "name" => 'Линейные',
        "description" => 'Такой вид кухни подойдёт в случае, если вам необходимо сэкономить место в помещении',
    ],
    [
        "image" => ["src" => 'image/ugol.jpeg', "alt" => "Угловые"],
        "name" => 'Угловые',
        "description" => 'Угловая кухня позволит увеличить количество отсеков для посуды',
    ],
    [
        "image" => ["src" => 'image/ostrov.jpeg', "alt" => "Островные"],
        "name" => 'Островные',
        "description" => 'Остров сочетает в себе систему хранения принадлежностей и обеденную зону',
    ],
];

$kitchenStyleItems = [
    [
        "image" => ["src" => 'image/line1.jpeg', "alt" => "Хайтек"],
        "name" => 'Хайтек',
        "description" => 'Данный стиль кухни придаст вашей квартире современный вид',
    ],
    [
        "image" => ["src" => 'image/ugol.jpeg', "alt" => "Классика"],
        "name" => 'Классика',
        "description" => 'Классический стиль подойдёт ценителям непревзойдённой мебели прошлых эпох',
    ],
    [
        "image" => ["src" => 'image/ostrov.jpeg', "alt" => "Неоклассика"],
        "name" => 'Неоклассика',
        "description" => 'Исполнение в стиле неоклассики — смешение античной и современной архитектуры',
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
</head>
<body>
    <?php $APPLICATION->includeComponent("header", ".default", ["logo" => "МЕБЕЛЬ",
    "desk" => "Центр мебельных технологий",
    "navbar" => $navbarItems,
    "number" => "+7 3452 00-00-00",
    "header_button" => "Оставить заявку",
    ]);?>

    <?php $APPLICATION->includeComponent("main", ".default", ["hero_title" => "ЗАКАЗЫВАЙТЕ КУХНЮ ОТ ПРОИЗВОДИТЕЛЯ",
    "hero_subtitle" => "Высокое качество, профессиональный подход и креативные решения",
    "hero_location" => "Работаем по Тюмени и Тюменской области",
    "hero_button" => "Оставить заявку",
    "view" => "Виды кухонь",
    "div_type" => $kitchenTypeItems,
    "style" => "Стили кухонь",
    "div_style" => $kitchenStyleItems,
    ]);?>
    
    <?php $APPLICATION->includeComponent("footer", ".default", ["foot_title" => "Мебель",
    "foot_subtitle" => "Центр мебельных технологий",
    "foot_button" => "Авторизоваться",
    "menuname" => "Меню",
    "contactname" => "Контакты",
    "menu" => $footerMenuItems,
    "contact" => $footerContactItems,
    "bottom" => $footerBottomItems,
    ]);?>
</body>
</html>