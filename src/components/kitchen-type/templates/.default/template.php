    <section class="section section__kitchen-types">
            <h2 class="section__title section__title_view"><?= $arResult["title_view"]?></h2>
            <div class="kitchen-types">
                <?php foreach ($arResult["kitchen_type"] as $kitchenTypeItem) : ?>
                    <div class="kitchen-types__item">
                    <img src="<?=$kitchenTypeItem["image"]["src"]?>" alt="<?=$kitchenTypeItem["image"]["alt"]?>" 
                    class="kitchen-types__image">
                    <h4 class="kitchen-types__name"><?=$kitchenTypeItem["name"]?></h4>
                    <p class="kitchen-types__description"><?=$kitchenTypeItem["description"]?></p>
                    </div>
                <?php endforeach; ?>           
            </div>

            <h2 class="section__title section__title_style"><?= $arResult["style_view"]?></h2>
            <div class="kitchen-styles">
                <?php foreach ($arResult["kitchen_style"] as $kitchenStyleItem) : ?>
                    <div class="kitchen-types__item">
                        <img src="<?=$kitchenStyleItem["image"]["src"]?>" alt="<?=$kitchenStyleItem["image"]["alt"]?>" 
                        class="kitchen-styles__image">
                        <h4 class="kitchen-types__name"><?=$kitchenStyleItem["name"]?></h4>
                        <p class="kitchen-types__description"><?=$kitchenStyleItem["description"]?></p>
                    </div>
                <?php endforeach;?> 
            </div>
            <div class="kitchen-styles__div">
                <?php foreach ($arResult["kitchen_style_width"] as $kitchenStyleWidthItem) : ?>
                    <div class="kitchen-styles__item kitchen-styles__item_width">
                        <img src="<?=$kitchenStyleWidthItem["image"]["src"]?>" alt="<?=$kitchenStyleWidthItem["image"]["alt"]?>" 
                        class="kitchen-styles__image kitchen-styles__image_width">
                        <h4 class="kitchen-types__name"><?=$kitchenStyleWidthItem["name"]?></h4>
                        <p class="kitchen-types__description"><?=$kitchenStyleWidthItem["description"]?></p>
                    </div>
                <?php endforeach;?>
            </div>
        </section>
