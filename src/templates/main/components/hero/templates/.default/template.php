<main class="main">
    <section class="hero" id="hero" data-hero='<?= json_encode($arParams) ?>'>
        <div class="hero__content">
            <h1 class="hero__title">{{ hero_title }}</h1>
            <p class="hero__subtitle">{{ hero_subtitle }}</p>
            <p class="hero__location">{{ hero_location }}</p>
        </div>
        <button class="button hero__button hero__button_secondary">{{ hero_button }}</button>
    </section>

<script type="module" src="/templates/main/js/hero.js"></script>
