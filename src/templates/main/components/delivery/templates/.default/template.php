    <section class="section section-delivery" id="section-delivery" data-params='<?= json_encode($arParams) ?>'>
        <div class="delivery__content">
            <div class="delivery__text">
                <h2 class="delivery__header">{{ delivery_title }}</h2>
                <p v-for="deliveryItem in delivery_subtitle" class="delivery__paragraph">
                    {{ deliveryItem.text }}
                </p>
            </div>
        </div>
        <div class="delivery__image"></div>
    </section>
    
<script src="/templates/main/js/delivery.js"></script>