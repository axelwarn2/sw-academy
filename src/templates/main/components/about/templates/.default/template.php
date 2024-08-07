    <section class="section section-kitchen-about">
        <div class="kitchen-about__image"></div>
        <div class="kitchen-about__content">
            <div class="kitchen-about__text">
                <h2 class="kitchen-about__header"><?= $arResult["about_header"]?></h2>
                <?php foreach ($arResult["about_paragraph"] as $kitchenAboutItem) : ?>
                <p class="kitchen-about__paragraph"><?= $kitchenAboutItem["text"]?>
                </p>
                <?php endforeach;?>
            </div>
            <button class="button kitchen-about__button"><?= $arResult["kitchen_about_button"]?></button>
        </div>
    </section>
    