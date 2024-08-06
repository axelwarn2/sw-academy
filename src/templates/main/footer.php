<footer class="footer">
    <div class="footer__content">
        <div class="footer__block footer__block_brand">
            <h2 class="footer__title"><?= $arResultFooter["foot_title"] ?></h2>
            <p class="footer__subtitle"><?= $arResultFooter["foot_subtitle"] ?></p>
        </div>
        <div class="footer__block footer__block_menu">
            <p class="footer__header"><?= $arResultFooter["menuname"] ?></p>
            <?php foreach ($arResultFooter["menu"] as $footerMenuItem) : ?>
                <p class="footer__menu-item"><?= $footerMenuItem["heading"] ?></p>
            <?php endforeach; ?>
        </div>
        <div class="footer__block footer__block_contacts">
            <p class="footer__header"><?= $arResultFooter["contactname"] ?></p>
            <div class="footer__contacts">
                <?php foreach ($arResultFooter["contact"] as $footerContactItem) : ?>
                    <p class="footer__contact-item"><?= $footerContactItem["heading"] ?></p>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="footer__block footer__block_auth">
            <a href="../../../../authentication.php"><button class="footer__auth-button">
                <?= $arResultFooter["foot_button"] ?></button>
            </a>
        </div>
    </div>
    <div class="footer__bottom">
        <?php foreach ($arResultFooter["bottom"] as $footerBottomItem) : ?>
            <p class="footer__rights"><?= $footerBottomItem["heading"] ?></p>
        <?php endforeach; ?>
    </div>
</footer>
