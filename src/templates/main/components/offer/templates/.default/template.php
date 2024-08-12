<section class="section section-offers" id="section-offers" data-offers='<?= json_encode($arParams) ?>'>
        <div class="offers__content">
            <h2 class="offers__title">{{ offers }}</h2>
            <div class="offers__list">
                <offers-component :div_offers="div_offers"></offers-component>
            </div>
    </section>
</main>

<script type="module" src="/templates/main/js/offer.js"></script>
