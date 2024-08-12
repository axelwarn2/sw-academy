    <section class="section section__kitchen-fasad" id="section__kitchen-fasad" data-params='<?= json_encode($arParams) ?>'>
        <h2 class="section__title section__title_fasad">{{ fasad }}</h2>
        <div class="kitchen-fasad">
            <div v-for="kitchenFasad in div_fasad" class="kitchen-fasad__item">
                <img :src="kitchenFasad.image.src" :alt="kitchenFasad.image.alt" class="kitchen-fasad__image">
                <h4 class="kitchen-fasad__name">{{ kitchenFasad.name }}</h4>
                <p class="kitchen-fasad__description">{{ kitchenFasad.description }}</p>
            </div>
        </div>
    </section>
    
<script src="/templates/main/js/kitchen-fasad.js"></script>
