<footer class="footer" id="footer" data-footer='<?= json_encode($arParams) ?>'>
    <div class="footer__content">
        <div class="footer__block footer__block_brand">
            <h2 class="footer__title">{{ foot_title}}</h2>
            <p class="footer__subtitle">{{ foot_subtitle }}</p>
        </div>
        <div class="footer__block footer__block_menu">
            <p class="footer__header">{{ menuname }}</p>
            <menu-component :menu=menu></menu-component>
        </div>
        <div class="footer__block footer__block_contacts">
            <p class="footer__header">{{ contactname }}</p>
            <contact-component :contact=contact></contact-component>
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

<script type="module" src="/templates/main/js/footer.js"></script>
