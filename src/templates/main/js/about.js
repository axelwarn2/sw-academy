Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("section-kitchen-about").dataset.params);
        return {
            ...params
        };
    },
}).mount('#section-kitchen-about');
