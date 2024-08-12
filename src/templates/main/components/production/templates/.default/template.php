    <section class="section section-production" id="section-production" data-params='<?= json_encode($arParams) ?>'>
        <div class="production__image"></div>
        <div class="production__content">
            <div class="production__text">
                <h2 class="production__header">{{ production_title }}</h2>
                <p v-for="productionItem in production_subtitle" class="production__paragraph">
                    {{ productionItem.text }}
                </p>
            </div>
            <button class="button production__button">{{ production_button }}</button>
        </div>
    </section>

    <script src="/templates/main/js/production.js"></script>