import OffersComponent from './OffersComponent.js';

const params = JSON.parse(document.querySelector("#section-offers").dataset.offers);

Vue.createApp({
    components: {
        'offers-component': OffersComponent,
    },
    data() {
        return {
            ...params
        };
    },
}).mount('#section-offers');
