import MenuFooterComponent from './MenuFooterComponent.js';
import ContactComponent from './ContactComponent.js';
import BottomComponent from './BottomComponent.js';

const params = JSON.parse(document.querySelector("#footer").dataset.footer);
Vue.createApp({
    components: {
        'menu-component': MenuFooterComponent,
        'contact-component': ContactComponent,
        'bottom-component': BottomComponent,
    },
    data() {
        return {
            ...params
        };
    },
}).mount('#footer');
