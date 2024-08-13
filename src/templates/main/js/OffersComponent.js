import { defineComponent } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js';

export default defineComponent({
    props: ['div_offers'],
    template: `
        <div v-for="offerItem in div_offers" class="offers__item">
            <img :src="offerItem.image.src" :alt="offerItem.image.alt" class="offers__image">
            <h4 class="offers__header">{{ offerItem.name }}</h4>
            <p class="offers__description">{{ offerItem.description }}</p>
        </div>
    `
});
