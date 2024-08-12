Vue.createApp({
    data() {
        const params = JSON.parse(document.getElementById("main-auth").dataset.params);
        console.log(params)
        return {
            ...params
        }
    }
}).mount('#main-auth');
