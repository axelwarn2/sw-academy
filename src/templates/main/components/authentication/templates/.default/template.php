    <main class="main-auth" id="main-auth" data-params='<?= json_encode($arParams) ?>'>
            <section class="main-auth__hero">
                <div class="hero__content-auth">
                    <h1 class="hero__title-auth"><?= $arResult["auth_header"] ?></h1>
                    <form action="authentication.php" method="post" class="form-section-auth__form-element">
                        <span class="form-section-auth__input-wrapper">
                            <input type="text" name="email" class="form-section-auth__input form-section-auth__input--name" placeholder="Email*">
                        </span>
                        <span class="form-section-auth__input-wrapper form-section-auth__input-number">
                            <input type="password" name="password" class="form-section-auth__input form-section-auth__input--phone" placeholder="Пароль*">
                        </span>
                        <button class="form-section-auth__button"><?= $arResult["auth_section_button"] ?></button>
                    </form>
                </div>
            </section>
    </main>

<script src="/templates/main/js/authentication.js"></script>
