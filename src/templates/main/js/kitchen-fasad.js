import FasadComponent from './FasadComponent.js';

const params = JSON.parse(document.querySelector("#section__kitchen-fasad").dataset.params);
Vue.createApp({
    components: {
        'fasad-component': FasadComponent,
    },
    data() {
        return {
            ...params
        };
    },
}).mount('#section__kitchen-fasad');
