import { defineComponent } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js';

export default defineComponent({
    props: ['production_subtitle'],
    template: `
        <p v-for:="productionItem in production_subtitle" class="production__paragraph">
            {{ productionItem.text }}
        </p>
    `
});
