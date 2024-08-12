Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("section-delivery").dataset.params);
        return {
            ...params
        };
    },
}).mount('#section-delivery');
