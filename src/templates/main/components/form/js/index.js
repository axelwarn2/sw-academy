import {createApp} from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js';

const params = JSON.parse(document.querySelector("#form").dataset.forms);

createApp({
    data() {
        return {
            ...params,
            form: {
                name: '',
                tel: '',
            }
        }
    },
    methods: {
        submit(event) {
            event.preventDefault();
            APP.runComponentAction('form', 'create', this.form)
                .then(params => console.log(params));
        }
    }
}).mount('#form');
