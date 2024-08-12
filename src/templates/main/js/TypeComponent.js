import { defineComponent } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js';

export default defineComponent({
    props: [
        'div_type',
        'div_style',
        'div_style_width',
    ],
    template: `
        <div v-for="typeItem in div_type" :key="typeItem.name" class="kitchen-types__item">
            <img :src="typeItem.image.src" :alt="typeItem.image.alt" class="kitchen-types__image">
            <h4 class="kitchen-types__name">{{ typeItem.name }}</h4>
            <p class="kitchen-types__description">{{ typeItem.description }}</p>
        </div>

        <div v-for="styleItem in div_style" :key="styleItem.name" class="kitchen-types__item">
            <img :src="styleItem.image.src" :alt="styleItem.image.alt" class="kitchen-styles__image">
            <h4 class="kitchen-types__name">{{ styleItem.name }}</h4>
            <p class="kitchen-types__description">{{ styleItem.description }}</p>
        </div>
        
        <div v-for="styleWidthItem in div_style_width" :key="styleWidthItem.name" class="kitchen-styles__item kitchen-styles__item_width">
            <img :src="styleWidthItem.image.src" :alt="styleWidthItem.image.alt" class="kitchen-styles__image kitchen-styles__image_width">
            <h4 class="kitchen-types__name">{{ styleWidthItem.name }}</h4>
            <p class="kitchen-types__description">{{ styleWidthItem.description }}</p>
        </div>
    `
});
