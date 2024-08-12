Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("section__kitchen-fasad").dataset.params);
        return {
            ...params
        };
    },
}).mount('#section__kitchen-fasad');
