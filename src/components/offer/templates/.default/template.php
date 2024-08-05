<section class="section section-offers">
        <div class="offers__content">
            <h2 class="offers__title"><?= $arResult["offers_view"]?></h2>
            <div class="offers__list">
            <?php foreach ($arResult["kitchen_offers"] as $kitchenOfferItem) : ?>
                <div class="offers__item">
                    <img src="<?=$kitchenOfferItem["image"]["src"]?>" alt="<?=$kitchenOfferItem["image"]["alt"]?>" class="offers__image">
                    <h4 class="offers__header"><?= $kitchenOfferItem["name"]?></h4>
                    <p class="offers__description"><?= $kitchenOfferItem["description"]?></p>
                </div>
            <?php endforeach;?>
            </div>
    </section>
</main>
