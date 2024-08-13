import ProductionComponent from './ProductionComponent.js';

const params = JSON.parse(document.querySelector("#section-production").dataset.template);

Vue.createApp({
    components: {
        'production-component': ProductionComponent,
    },
    data() {
        return {
            ...params
        };
    },
}).mount('#section-production');
