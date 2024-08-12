import MenuComponent from './MenuComponent.js';

const params = JSON.parse(document.querySelector("#header").dataset.header);
Vue.createApp({
    components: {
        'menu-component': MenuComponent,
    },
    data() {
        return {
            ...params
        };
    },
}).mount('#header');
