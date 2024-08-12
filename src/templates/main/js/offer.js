Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("section-offers").dataset.params);
        return {
            ...params || ''
        };
    },
}).mount('#section-offers');
