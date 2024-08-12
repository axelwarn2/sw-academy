    <section class="section section-kitchen-about" id="section-kitchen-about" data-params='<?= json_encode($arParams) ?>'>
        <div class="kitchen-about__image"></div>
        <div class="kitchen-about__content">
            <div class="kitchen-about__text">
                <h2 class="kitchen-about__header">{{ about_title }}</h2>
                <p v-for:="aboutItem in about_subtitle" class="kitchen-about__paragraph">
                    {{ aboutItem.text }}
                </p>
            </div>
            <button class="button kitchen-about__button">{{ about_button }}</button>
        </div>
    </section>
 
    <script src="/templates/main/js/about.js"></script>