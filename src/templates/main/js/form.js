import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js';

const params = JSON.parse(document.querySelector("#form").dataset.forms);

createApp({
    data() {
        return {
            ...params
        };
    }
}).mount('#form');
