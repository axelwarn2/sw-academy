    <section class="section section-production">
        <div class="production__image"></div>
        <div class="production__content">
            <div class="production__text">
                <h2 class="production__header"><?= $arResult["production_header"]?></h2>
                <?php foreach ($arResult["production_paragraph"] as $kitchenProductionItem) : ?>
                <p class="production__paragraph"><?= $kitchenProductionItem["text"]?>
                </p>
                <?php endforeach;?>
            </div>
            <button class="button production__button"><?= $arResult["kitchen_production_button"]?></button>
        </div>
    </section>
    