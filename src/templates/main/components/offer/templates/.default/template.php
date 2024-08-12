<section class="section section-offers" id="section-offers" data-params='<?= json_encode($arParams) ?>'>
        <div class="offers__content">
            <h2 class="offers__title">{{ offers }}</h2>
            <div class="offers__list">
                <div v-for="offerItem in div_offers" class="offers__item">
                    <img :src="offerItem.image.src" :alt="offerItem.image.alt" class="offers__image">
                    <h4 class="offers__header">{{ offerItem.name }}</h4>
                    <p class="offers__description">{{ offerItem.description }}</p>
                </div>
            </div>
    </section>
</main>

<script src="/templates/main/js/offer.js"></script>