<footer class="footer" id="footer" data-params='<?= json_encode($arParams) ?>'>
    <div class="footer__content">
        <div class="footer__block footer__block_brand">
            <h2 class="footer__title">{{ foot_title}}</h2>
            <p class="footer__subtitle">{{ foot_subtitle }}</p>
        </div>
        <div class="footer__block footer__block_menu">
            <p class="footer__header">{{ menuname }}</p>
            <p v-for="item in menu" class="footer__menu-item">{{ item.heading }}</p>
        </div>
        <div class="footer__block footer__block_contacts">
            <p class="footer__header">{{ contactname }}</p>
            <div class="footer__contacts">
                <p v-for="item in contact" class="footer__contact-item">{{ item.heading }}</p>
            </div>
        </div>
        <div class="footer__block footer__block_auth">
            <a href="../../../../authentication.php">
                <button class="footer__auth-button">
                    {{ foot_button }}
                </button>
            </a>
        </div>
    </div>
    <div class="footer__bottom">
        <p v-for="item in bottom" class="footer__rights">{{ item.heading }}</p>
    </div>
</footer>

<script src="/templates/main/js/footer.js"></script>