Vue.createApp({
    data() {
        const params1 = JSON.parse(document.getElementById("footer").dataset.params);
        return {
            ...params1
        };
    },
}).mount('#footer');
