Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("form").dataset.params);
        return {
            ...params
        };
    },
}).mount('#form');
