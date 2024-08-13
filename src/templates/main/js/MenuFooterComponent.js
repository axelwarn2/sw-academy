export default Vue.defineComponent({
    props: ['menu'],
    template: `
        <p v-for="item in menu" class="footer__menu-item">{{ item.heading }}</p>
    `
})
