    <section class="section section-production" id="section-production" data-template='<?= json_encode($arParams) ?>'>
        <div class="production__image"></div>
        <div class="production__content">
            <div class="production__text">
                <h2 class="production__header">{{ production_title }}</h2>
                <production-component :production_subtitle="production_subtitle"></production-component>
            </div>
            <button class="button production__button">{{ production_button }}</button>
        </div>
    </section>

<script type="module" src="/templates/main/js/production.js"></script>
