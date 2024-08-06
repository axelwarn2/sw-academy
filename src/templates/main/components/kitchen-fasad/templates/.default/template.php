    <section class="section section__kitchen-fasad">
        <h2 class="section__title section__title_fasad"><?= $arResult["fasad_view"]?></h2>
        <div class="kitchen-fasad">
            <?php foreach ($arResult["kitchen_fasad"] as $kitchenFasadItem) : ?>
            <div class="kitchen-fasad__item">
                <img src="<?=$kitchenFasadItem["image"]["src"]?>" alt="<?=$kitchenFasadItem["image"]["alt"]?>" class="kitchen-fasad__image">
                <h4 class="kitchen-fasad__name"><?= $kitchenFasadItem["name"]?></h4>
                <p class="kitchen-fasad__description"><?= $kitchenFasadItem["description"]?></p>
            </div>
            <?php endforeach;?>
        </div>
    </section>
    