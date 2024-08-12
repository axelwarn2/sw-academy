    <section class="section section__kitchen-types" id='section__kitchen-types' data-params='<?= json_encode($arParams) ?>'>
            <h2 class="section__title section__title_view">{{ view }}</h2>
            <div class="kitchen-types">
                <div v-for="typeItem in div_type" class="kitchen-types__item">
                    <img :src="typeItem.image.src" :alt="typeItem.image.alt" 
                        class="kitchen-types__image">
                    <h4 class="kitchen-types__name">{{ typeItem.name }}</h4>
                    <p class="kitchen-types__description">{{ typeItem.description }}</p>
                </div>
            </div>

            <h2 class="section__title section__title_style">{{ style }}</h2>
            <div class="kitchen-styles">
                <div v-for="styleItem in div_style" class="kitchen-types__item">
                    <img :src="styleItem.image.src" :alt="styleItem.image.alt" 
                        class="kitchen-styles__image">
                    <h4 class="kitchen-types__name">{{ styleItem.name }}</h4>
                    <p class="kitchen-types__description">{{ styleItem.description }}</p>
                </div>
            </div>
            <div class="kitchen-styles__div">
                    <div v-for="styleViwthItem in div_style_width" class="kitchen-styles__item kitchen-styles__item_width">
                        <img :src="styleViwthItem.image.src" :alt="styleViwthItem.image.alt" 
                        class="kitchen-styles__image kitchen-styles__image_width">
                        <h4 class="kitchen-types__name">{{ styleViwthItem.name }}</h4>
                        <p class="kitchen-types__description">{{ styleViwthItem.description }}</p>
                    </div>
            </div>
        </section>

<script src="/templates/main/js/kitchen-type.js"></script>
