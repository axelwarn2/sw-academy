import { defineComponent } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js';

export default defineComponent({
    props: ['div_fasad',],
    template: `
        <div class="kitchen-fasad">
            <div v-for="kitchenFasad in div_fasad" class="kitchen-fasad__item">
                <img :src="kitchenFasad.image.src" :alt="kitchenFasad.image.alt" class="kitchen-fasad__image">
                <h4 class="kitchen-fasad__name">{{ kitchenFasad.name }}</h4>
                <p class="kitchen-fasad__description">{{ kitchenFasad.description }}</p>
            </div>
        </div>
    `
});
