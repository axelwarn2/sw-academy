import TypeComponent from './TypeComponent.js';

const params = JSON.parse(document.querySelector("#section__kitchen-types").dataset.types);

Vue.createApp({
    components: {
        'type-component': TypeComponent,
    },
    data() {
        return {
            ...params
        };
    },
}).mount('#section__kitchen-types');
