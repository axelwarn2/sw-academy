const params = JSON.parse(document.querySelector("#hero").dataset.hero);
Vue.createApp({
    data() {
        return {
            ...params
        };
    },
}).mount('#hero');
