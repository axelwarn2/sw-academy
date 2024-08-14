const params = JSON.parse(document.querySelector("#main-auth").dataset.auth);
Vue.createApp({
    data() {
        return {
            ...params
        };
    },
}).mount('#main-auth');
