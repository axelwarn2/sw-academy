    <section class="section form-section">
        <div class="form-section__text">
            <h2 class="form-section__header"><?= $arResult["form_header"]?></h2>
            <p class="form-section__paragraph"><?= $arResult["form_paragraph"]?></p>
        </div>
        <div class="form-section__form">
            <form action="index.php" method="post" class="form-section__form-element">
                <span class="form-section__input-wrapper">
                    <input type="text" class="form-section__input form-section__input_name" placeholder="Имя">
                </span>
                <span class="form-section__input-wrapper">
                    <input type="number" class="form-section__input form-section__input_phone" placeholder="Телефон">
                </span>
                <button class="form-section__button"><?= $arResult["form_section_button"]?></button>
            </form>
        </div>
    </section>
