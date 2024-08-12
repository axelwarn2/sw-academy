import DeliveryComponent from './DeliveryComponent.js';

const params = JSON.parse(document.querySelector("#section-delivery").dataset.delivery);

Vue.createApp({
    components: {
        'delivery-component': DeliveryComponent,
    },
    data() {
        return {
            ...params
        };
    },
}).mount('#section-delivery');
