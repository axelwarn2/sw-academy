<main class="main">
    <section class="hero">
        <div class="hero__content">
            <h1 class="hero__title"><?= $arResult["main_title"] ?></h1>
            <p class="hero__subtitle"><?= $arResult["main_subtitle"]?></p>
            <p class="hero__location"><?= $arResult["main_location"]?></p>
        </div>
        <button class="button hero__button hero__button_secondary"><?= $arResult["main_button"]?></button>
    </section>

    <section class="section section__kitchen-types">
        <h2 class="section__title section__title_view"><?= $arResult["title_view"]?></h2>
        <div class="kitchen-types">
            <?php foreach ($arResult["kitchen_type"] as $kitchenTypeItem) : ?>
                <div class="kitchen-types__item">
                <img src="<?=$kitchenTypeItem["image"]["src"]?>" alt="<?=$kitchenTypeItem["image"]["alt"]?>" class="kitchen-types__image">
                <h4 class="kitchen-types__name"><?=$kitchenTypeItem["name"]?></h4>
                <p class="kitchen-types__description"><?=$kitchenTypeItem["description"]?></p>
                </div>
            <?php endforeach; ?>           
        </div>

        <h2 class="section__title section__title_style"><?= $arResult["style_view"]?></h2>
        <div class="kitchen-styles">
            <?php foreach ($arResult["kitchen_style"] as $kitchenStyleItem) : ?>
                <div class="kitchen-types__item">
                    <img src="<?=$kitchenStyleItem["image"]["src"]?>" alt="<?=$kitchenStyleItem["image"]["alt"]?>" class="kitchen-styles__image">
                    <h4 class="kitchen-types__name"><?=$kitchenStyleItem["name"]?></h4>
                    <p class="kitchen-types__description"><?=$kitchenStyleItem["description"]?></p>
                </div>
            <?php endforeach;?> 
        </div>
        <div class="kitchen-styles__div">
            <div class="kitchen-styles__item kitchen-styles__item_width">
                <img src="image/line1.jpeg" alt="Прованс" class="kitchen-styles__image kitchen-styles__image_width">
                <h4 class="kitchen-styles__name">Прованс</h4>
                <p class="kitchen-styles__description">Этот стиль порадует истинного ценителя провинциального французского интерьера, привнеся нотки деревенского шарма, сохранив при этом изящность французского дома</p>
            </div>
            <div class="kitchen-styles__item kitchen-styles__item_width">
                <img src="image/japan.jpeg" alt="Японский стиль" class="kitchen-styles__image kitchen-styles__image_width">
                <h4 class="kitchen-styles__name">Японский стиль</h4>
                <p class="kitchen-styles__description">Это разновидность этнических направлений в минимализме, в которой присутствуют безукоризненные цветовые комбинации и лаконичность форм в сочетании с нестандартными решениями в оформлении</p>
            </div>
        </div>
    </section>

    <section class="section form-section">
        <div class="form-section__text">
            <h2 class="form-section__header">Оставьте заявку</h2>
            <p class="form-section__paragraph">Наши специалисты свяжутся с вами в течение одного часа</p>
        </div>
        <div class="form-section__form">
            <form action="index.php" method="post" class="form-section__form-element">
                <span class="form-section__input-wrapper">
                    <input type="text" class="form-section__input form-section__input_name" placeholder="Имя">
                </span>
                <span class="form-section__input-wrapper">
                    <input type="number" class="form-section__input form-section__input_phone" placeholder="Телефон">
                </span>
                <button class="form-section__button">Отправить</button>
            </form>
        </div>
    </section>

    <section class="section section__kitchen-fasad">
        <h2 class="section__title">Материал фасада кухонь</h2>
        <div class="kitchen-fasad">
            <div class="kitchen-fasad__item">
                <img src="image/line1.jpeg" alt="Плёнка" class="kitchen-fasad__image">
                <h4 class="kitchen-fasad__name">Плёнка</h4>
                <p class="kitchen-fasad__description">Данный материал примечателен своей долговечностью, 
                    светоустойчивостью, а также огромным многообразием фактур</p>
            </div>
            <div class="kitchen-fasad__item">
                <img src="image/ugol.jpeg" alt="Древесная стружка" class="kitchen-fasad__image">
                <h4 class="kitchen-fasad__name">Древесная стружка</h4>
                <p class="kitchen-fasad__description">Фасады из древесной стружки (мелкодисперсная фракция) хороши тем, 
                    что их можно отмыть от любой грязи</p>
            </div>
            <div class="kitchen-fasad__item">
                <img src="image/ostrov.jpeg" alt="Шпон" class="kitchen-fasad__image">
                <h4 class="kitchen-fasad__name">Шпон</h4>
                <p class="kitchen-fasad__description">Считается самым дорогостоящим вариантом кухонного гарнитура, так как он получается 
                    из ценных древесных пород</p>
            </div>
            <div class="kitchen-fasad__item">
                <img src="image/line1.jpeg" alt="Массив" class="kitchen-fasad__image">
                <h4 class="kitchen-fasad__name">Массив</h4>
                <p class="kitchen-fasad__description">Кухня из массива отличается уникальностью 
                    и солидностью, а также придаёт помещению благородный внешний вид</p>
            </div>
            <div class="kitchen-fasad__item">
                <img src="image/ugol.jpeg" alt="Пластик" class="kitchen-fasad__image">
                <h4 class="kitchen-fasad__name">Пластик</h4>
                <p class="kitchen-fasad__description">Пластик отлично вписывается во все стили дизайна интерьера 
                    и позволяет воплотить различные дизайнерские фантазии</p>
            </div>
            <div class="kitchen-fasad__item">
                <img src="image/ostrov.jpeg" alt="Эмаль" class="kitchen-fasad__image">
                <h4 class="kitchen-fasad__name">Эмаль</h4>
                <p class="kitchen-fasad__description">Используя огромную цветовую палитру 
                    эмали, вы можете сделать, вашу кухню 
                    свежей и яркой</p>
            </div>
        </div>
    </section>

    <section class="section section-kitchen-about">
        <div class="kitchen-about__image"></div>
        <div class="kitchen-about__content">
            <div class="kitchen-about__text">
                <h2 class="kitchen-about__header">О кухнях</h2>
                <p class="kitchen-about__paragraph">Наша компания изготавливает кухни 
                    по индивидуальному проекту, 
                    что позволит самостоятельно выбрать 
                    стиль и цвет каждого изделия.
                </p>
                <p class="kitchen-about__paragraph">У нас вы найдете более 1000 цветов 
                    фартуков с фотопечатью и более 100 
                    вариантов дверных ручек, разновидностей 
                    фурнитуры, цветов столешниц, фасадов 
                    и стеновых изделий.
                </p>
            </div>
            <button class="button kitchen-about__button">Заказать</button>
        </div>
    </section>

    <section class="section section-delivery">
        <div class="delivery__content">
            <div class="delivery__text">
                <h2 class="delivery__header">Доставка</h2>
                <p class="delivery__paragraph">Мы организуем транспортировку 
                    вашего заказа, и, при необходимости, наши сотрудники смогут 
                    сразу же произвести сборку и установку оборудования.
                </p>
                <p class="delivery__paragraph">Вы можете быть уверены в том, 
                    что все изделия будут перевезены в точном соответствии с 
                    установленными правилами перевозки. 
                </p>
            </div>
        </div>
        <div class="delivery__image"></div>
    </section>

    <section class="section section-production">
        <div class="production__image"></div>
        <div class="production__content">
            <div class="production__text">
                <h2 class="production__header">У нас своё производство</h2>
                <p class="production__paragraph">Компания “МЕБЕЛЬ” создана в апреле 
                    2011 года инженером-технологом Дмитрием Николаевичем Важинским, имеет 
                    собственное производство 
                    и профессиональное оборудование.
                </p>
                <p class="production__paragraph">Вы можете посетить нас 
                    (Тюмень, ул.Калинина, 22/1) в любое удобное для вас 
                    время, предварительно записавшись 
                    к директору компании через сайт, 
                    либо по телефону +7 345 00-00-00.
                </p>
            </div>
            <button class="button production__button">Записаться</button>
        </div>
    </section>

    <section class="section section-offers">
        <div class="offers__content">
            <h2 class="offers__title">Что мы предлагаем</h2>
            <div class="offers__list">
                <div class="offers__item">
                    <img src="image/wish-list 1.svg" alt="Сделаем по эскизу" class="offers__image">
                    <h3 class="offers__header">Сделаем по эскизу</h3>
                    <p class="offers__description">Если у вас есть пожелания, изготовим кухню согласно вашим примерам</p>
                </div>

                <div class="offers__item">
                    <img src="image/smartphone 1.svg" alt="Подстроимся под бюджет" class="offers__image">
                    <h3 class="offers__header">Подстроимся под бюджет</h3>
                    <p class="offers__description">Для  эскиза подберем материалы эконом, стандарт или премиум класса</p>
                </div>

                <div class="offers__item">
                    <img src="image/shield 2 1.svg" alt="Гарантия 5 лет" class="offers__image">
                    <h3 class="offers__header">Гарантия 5 лет</h3>
                    <p class="offers__description">Наша компания занимается изготовлением мебели много лет, 
                        мы отвечаем за качество</p>
                </div>

                <div class="offers__item">
                    <img src="image/living-room 1.svg" alt="Проект на этапе ремонта" class="offers__image">
                    <h3 class="offers__header">Проект на этапе ремонта</h3>
                    <p class="offers__description">Предусмотрим все нюансы и дадим рекомендации
                        по расположению элементов кухни</p>
                    </div>
                </div>
            </div>
    </section>
</main>