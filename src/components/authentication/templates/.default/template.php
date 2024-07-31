    <main class="main-auth">
        <section class="main-auth__hero">
            <div class="hero__content-auth">
                <h1 class="hero__title-auth"><?= $arResult["auth_header"]?></h1>
                <form action="index.php" method="post" class="form-section-auth__form-element">
                    <span class="form-section-auth__input-wrapper">
                        <input type="text" class="form-section-auth__input form-section-auth__input--name" placeholder="Имя*">
                    </span>
                    <span class="form-section-auth__input-wrapper form-section-auth__input-number">
                        <input type="number" class="form-section-auth__input form-section-auth__input--phone" placeholder="Телефон*">
                    </span>
                    <button class="form-section-auth__button"><?= $arResult["auth_section_button"]?></button>
                </form>
            </div>
        </section>
    </main>