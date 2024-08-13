<header class="header" id="header" data-header='<?= json_encode($arParams) ?>'>
    <div class="header__logo-inner">
        <span class="header__logo">{{ logo }}</span>
        <p class="header__logo-desc">{{ desk }}</p>
    </div>
    <menu-component :navbar="navbar"></menu-component>
    <div class="header__content">
        <p class="content__number">{{ number }}</p>
        <button class="button header__button header__button_secondary">{{ headerButton }}</button>
    </div>
</header>

<script type="module" src="/templates/main/js/header.js"></script>
