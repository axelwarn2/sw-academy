Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("section__kitchen-types").dataset.params);
        return {
            ...params
        };
    },
}).mount('#section__kitchen-types');
