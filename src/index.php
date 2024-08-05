<?php

include "framework/framework.php";

// dd($USER->getBy([
//     "name" => "Petya",
//     "email" => "sobaka@mail.ru"
// ]));

// dd($USER->create([
//     'name' => 'Petya',
//     'email' => 'sobaka@mail.ru',
//     'password' => '12345',
// ]));

// dd($USER->update(31, [
//     'name' => 'Ян',
//     'email' => 'sobaka2@mail.ru',
//     'password' => '12345',
// ]));

// dd($USER->delete(5));

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

$kitchenStyleWidthItems = [
    [
        "image" => ["src" => 'image/line1.jpeg', "alt" => "Прованс"],
        "name" => 'Прованс',
        "description" => 'Этот стиль порадует истинного ценителя провинциального французского интерьера, 
        привнеся нотки деревенского шарма, 
        сохранив при этом изящность французского дома',
    ],
    [
        "image" => ["src" => 'image/japan.jpeg', "alt" => "Японский стиль"],
        "name" => 'Японский стиль',
        "description" => 'Это разновидность этнических направлений в минимализме, в которой 
        присутствуют безукоризненные цветовые комбинации и лаконичность форм в сочетании 
        с нестандартными решениями в оформлении',
    ],
];

$kitchenFasadItems = [
    [
        "image" => ["src" => 'image/line1.jpeg', "alt" => "Плёнка"],
        "name" => "Плёнка",
        "description" => "Данный материал примечателен своей долговечностью, 
        светоустойчивостью, а также огромным многообразием фактур",
    ],
    [
        "image" => ["src" => 'image/ugol.jpeg', "alt" => "Древесная стружка"],
        "name" => "Древесная стружка",
        "description" => "Фасады из древесной стружки (мелкодисперсная фракция) 
        хороши тем, что их можно отмыть от любой грязи",
    ],
    [
        "image" => ["src" => 'image/ostrov.jpeg', "alt" => "Шпон"],
        "name" => "Шпон",
        "description" => "Считается самым дорогостоящим вариантом кухонного гарнитура, 
        так как он получается из ценных древесных пород",
    ],
    [
        "image" => ["src" => 'image/line1.jpeg', "alt" => "Массив"],
        "name" => "Массив",
        "description" => "Кухня из массива отличается уникальностью 
        и солидностью, а также придаёт помещению благородный внешний вид",
    ],
    [
        "image" => ["src" => 'image/ugol.jpeg', "alt" => "Пластик"],
        "name" => "Пластик",
        "description" => "Пластик отлично вписывается во все стили дизайна интерьера 
        и позволяет воплотить различные дизайнерские фантазии",
    ],
    [
        "image" => ["src" => 'image/ostrov.jpeg', "alt" => "Эмаль"],
        "name" => "Эмаль",
        "description" => "Используя огромную цветовую палитру 
        эмали, вы можете сделать, вашу кухню свежей и яркой",
    ],
];

$kitchenAboutItems = [
    [
        "text" => "Наша компания изготавливает кухни 
                    по индивидуальному проекту, 
                    что позволит самостоятельно выбрать 
                    стиль и цвет каждого изделия.",
    ],
    [
        "text" => "У нас вы найдете более 1000 цветов 
                    фартуков с фотопечатью и более 100 
                    вариантов дверных ручек, разновидностей 
                    фурнитуры, цветов столешниц, фасадов 
                    и стеновых изделий.",
    ],
];

$kitchenDeliveryItems = [
    [
        "text" => "Мы организуем транспортировку 
                    вашего заказа, и, при необходимости, наши сотрудники смогут 
                    сразу же произвести сборку и установку оборудования.",
    ],
    [
        "text" => "Вы можете быть уверены в том, 
                    что все изделия будут перевезены в точном соответствии с 
                    установленными правилами перевозки. ",
    ],
];

$kitchenProductionItems = [
    [
        "text" => "Компания “МЕБЕЛЬ” создана в апреле 2011 года инженером-технологом 
        Дмитрием Николаевичем Важинским, имеет собственное производство и 
        профессиональное оборудование.",
    ],
    [
        "text" => "Вы можете посетить нас (Тюмень, ул.Калинина, 22/1) в 
        любое удобное для вас время, предварительно записавшись к директору 
        компании через сайт, либо по телефону +7 345 00-00-00.",
    ],
];

$kitchenOfferItems = [
    [
        "image" => ["src" => 'image/wish-list 1.svg', "alt" => "Сделаем по эскизу"],
        "name" => "Сделаем по эскизу",
        "description" => "Если у вас есть пожелания, изготовим кухню согласно вашим примерам",
    ],
    [
        "image" => ["src" => 'image/smartphone 1.svg', "alt" => "Подстроимся под бюджет"],
        "name" => "Подстроимся под бюджет",
        "description" => "Для  эскиза подберем материалы эконом, стандарт или премиум класса",
    ],
    [
        "image" => ["src" => 'image/shield 2 1.svg', "alt" => "Гарантия 5 лет"],
        "name" => "Гарантия 5 лет",
        "description" => "Наша компания занимается изготовлением мебели много лет, 
                        мы отвечаем за качество",
    ],
    [
        "image" => ["src" => 'image/living-room 1.svg', "alt" => "Проект на этапе ремонта"],
        "name" => "Проект на этапе ремонта",
        "description" => "Предусмотрим все нюансы и дадим рекомендации
                        по расположению элементов кухни",
    ],
];

$APPLICATION->setCSS([
    "header" => ".default",
    "hero" => ".default",
    "kitchen-type" => ".default",
    "form" => ".default",
    "kitchen-fasad" => ".default",
    "about" => ".default",
    "delivery" => ".default",
    "production" => ".default",
    "offer" => ".default",
    "footer" => ".default",
]);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=$APPLICATION->showCSS();?>
    <title>Мебель</title>
</head>
<body>
    <?php $APPLICATION->includeComponent("header", ".default", [
        "logo" => "МЕБЕЛЬ",
        "desk" => "Центр мебельных технологий",
        "navbar" => $navbarItems,
        "number" => "+7 3452 00-00-00",
        "header_button" => "Оставить заявку",
    ]);?>

    <?php $APPLICATION->includeComponent("hero", ".default", [
        "hero_title" => "ЗАКАЗЫВАЙТЕ КУХНЮ ОТ ПРОИЗВОДИТЕЛЯ",
        "hero_subtitle" => "Высокое качество, профессиональный подход и креативные решения",
        "hero_location" => "Работаем по Тюмени и Тюменской области",
        "hero_button" => "Оставить заявку",
    ]);?>

    <?php $APPLICATION->includeComponent("kitchen-type", ".default", [
        "view" => "Виды кухонь",
        "div_type" => $kitchenTypeItems,
        "style" => "Стили кухонь",
        "div_style" => $kitchenStyleItems,
        "div_style_width" => $kitchenStyleWidthItems,
    ]);?>

    <?php $APPLICATION->includeComponent("form", ".default", [
        "form_title" => "Оставьте заявку",
        "form_subtitle" => "Наши специалисты свяжутся с вами в течение одного часа",
        "form_button" => "Отправить",
    ]);?>

    <?php $APPLICATION->includeComponent("kitchen-fasad", ".default", [
        "fasad" => "Материал фасада кухонь",
        "div_fasad" => $kitchenFasadItems,
    ]);?>

    <?php $APPLICATION->includeComponent("about", ".default", [
        "about_title" => "О кухнях",
        "about_subtitle" => $kitchenAboutItems,
        "about_button" => "Заказать",
    ]);?>
    
    <?php $APPLICATION->includeComponent("delivery", ".default", [
        "delivery_title" => "Доставка",
        "delivery_subtitle" => $kitchenDeliveryItems,
    ]);?>

    <?php $APPLICATION->includeComponent("production", ".default", [
        "production_title" => "У нас своё производство",
        "production_subtitle" => $kitchenProductionItems,
        "production_button" => "Записаться",
    ]);?>

    <?php $APPLICATION->includeComponent("offer", ".default", [
        "offers" => "Что мы предлагаем",
        "div_offers" => $kitchenOfferItems,
    ]);?>
    
    <?php $APPLICATION->includeComponent("footer", ".default", [
        "foot_title" => "МЕБЕЛЬ",
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
