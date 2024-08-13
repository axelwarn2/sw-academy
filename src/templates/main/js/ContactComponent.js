export default Vue.defineComponent({
    props: ['contact'],
    template: `
    <div class="footer__contacts">
        <p v-for="item in contact" class="footer__contact-item">{{ item.heading }}</p>
    </div>
    `
})
