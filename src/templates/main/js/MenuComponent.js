export default Vue.defineComponent({
    props: ['navbar'],
    template: `
    <nav class="header__navbar">
        <a v-for="navbarItem in navbar" :href="navbarItem.link" class="header__item" :key="navbarItem.heading">{{ navbarItem.heading }}</a>
    </nav>
    `
})
