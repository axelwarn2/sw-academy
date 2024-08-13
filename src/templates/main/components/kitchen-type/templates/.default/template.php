    <section class="section section__kitchen-types" id='section__kitchen-types' data-types='<?= json_encode($arParams) ?>'>
        <h2 class="section__title section__title_view">{{ view }}</h2>
        <div class="kitchen-types">
            <type-component :div_type="div_type"></type-component>
        </div>

        <h2 class="section__title section__title_style">{{ style }}</h2>
        <div class="kitchen-styles">
            <type-component :div_style="div_style"></type-component>
        </div>

        <div class="kitchen-styles__div">
            <type-component :div_style_width="div_style_width"></type-component>
        </div>
    </section>

<script type="module" src="/templates/main/js/kitchen-type.js"></script>
