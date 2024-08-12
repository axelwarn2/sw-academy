export default Vue.defineComponent({
    props: ['bottom'],
    template: `
    <div class="footer__bottom">
        <p v-for="item in bottom" class="footer__rights">{{ item.heading }}</p>
    </div>
    `
})
