    <section class="section section-kitchen-about" id="section-kitchen-about" data-about='<?= json_encode($arParams) ?>'>
        <div class="kitchen-about__image"></div>
        <div class="kitchen-about__content">
            <div class="kitchen-about__text">
                <h2 class="kitchen-about__header">{{ about_title }}</h2>
                <about-component :about_subtitle="about_subtitle"></about-component>
            </div>
            <button class="button kitchen-about__button">{{ about_button }}</button>
        </div>
    </section>
 
<script type="module" src="/templates/main/js/about.js"></script>
