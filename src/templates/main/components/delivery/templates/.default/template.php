    <section class="section section-delivery" id="section-delivery" data-delivery='<?= json_encode($arParams) ?>'>
        <div class="delivery__content">
            <div class="delivery__text">
                <h2 class="delivery__header">{{ delivery_title }}</h2>
                <delivery-component :delivery_subtitle="delivery_subtitle"></delivery-component>
            </div>
        </div>
        <div class="delivery__image"></div>
    </section>
    
<script type="module" src="/templates/main/js/delivery.js"></script>
