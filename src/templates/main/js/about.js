import AboutComponent from './AboutComponent.js';

const params = JSON.parse(document.querySelector("#section-kitchen-about").dataset.about);

Vue.createApp({
    components: {
        'about-component': AboutComponent,
    },
    data() {
        return {
            ...params
        };
    },
}).mount('#section-kitchen-about');
