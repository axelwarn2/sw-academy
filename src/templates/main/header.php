<header class="header">
    <div class="header__logo-inner">
        <span class="header__logo"><?= $arParams["logo"] ?></span>
        <p class="header__logo-desc"><?= $arParams["desk"] ?></p>
    </div>
    <nav class="header__navbar">
        <?php foreach ($arParams["navbar"] as $navbarItem) : ?>
            <a href="<?= $navbarItem["link"] ?>" class="header__item"><?= $navbarItem["heading"] ?></a>
        <?php endforeach; ?>
    </nav>
    <div class="header__content">
        <p class="content__number"><?= $arParams["number"] ?></p>
        <button class="button header__button header__button_secondary"><?= $arParams["header_button"] ?></button>
    </div>
</header>
