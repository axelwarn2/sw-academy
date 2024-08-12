const params = JSON.parse(document.querySelector("#form").dataset.forms);

Vue.createApp({
    data() {
        return {
            ...params
        };
    },
}).mount('#form');
