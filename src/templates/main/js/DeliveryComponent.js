import { defineComponent } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js';

export default defineComponent({
    props: ['delivery_subtitle'],
    template: `
        <p v-for:="deliveryItem in delivery_subtitle" class="delivery__paragraph">
            {{ deliveryItem.text }}
        </p>
    `
});
