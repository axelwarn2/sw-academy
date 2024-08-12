Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("header").dataset.params);
        return {
            ...params
        };
    },
}).mount('#header');
