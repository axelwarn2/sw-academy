import { defineComponent } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js';

export default defineComponent({
    props: ['about_subtitle'],
    template: `
        <p v-for:="aboutItem in about_subtitle" class="kitchen-about__paragraph">
            {{ aboutItem.text }}
        </p>
    `
});
