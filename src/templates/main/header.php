<header class="header" id="header" data-params='<?= json_encode($arParams) ?>'>
    <div class="header__logo-inner">
        <span class="header__logo">{{ logo }}</span>
        <p class="header__logo-desc">{{ desk }}</p>
    </div>
    <nav class="header__navbar">
        <a v-for="navbarItem in navbar" :href="navbarItem.link" class="header__item">{{ navbarItem.heading }}</a>
    </nav>
    <div class="header__content">
        <p class="content__number">{{ number }}</p>
        <button class="button header__button header__button_secondary">{{ headerButton }}</button>
    </div>
</header>

<script src="/templates/main/js/header.js"></script>
