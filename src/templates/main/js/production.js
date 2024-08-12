Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("section-production").dataset.params);
        return {
            ...params || ''
        };
    },
}).mount('#section-production');
