<header class="header">
    <div class="header__logo-inner">
        <span class="header__logo"><?= $arResult["header_logo"]?></span>
        <p class="header__logo-desc"><?= $arResult["header_logo-desc"]?></p>
    </div>
    <nav class="header__navbar">
        <?php foreach ($arResult["header_navbar"] as $navbarItem) : ?>
            <a href="#" class="header__item"><?=$navbarItem["heading"]?></a>
        <?php endforeach; ?>
    </nav>
    <div class="header__content">
        <p class="content__number"><?= $arResult["content_number"]?></p>
        <button class="button header__button header__button_secondary"><?= $arResult["header_button"]?></button>
    </div>
</header>
