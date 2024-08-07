    <section class="section section-delivery">
        <div class="delivery__content">
            <div class="delivery__text">
                <h2 class="delivery__header"><?= $arResult["delivery_header"]?></h2>
                <?php foreach ($arResult["delivery_paragraph"] as $kitchenDeliveryItem) : ?>
                <p class="delivery__paragraph"><?= $kitchenDeliveryItem["text"]?>
                </p>
                <?php endforeach;?>
            </div>
        </div>
        <div class="delivery__image"></div>
    </section>
    