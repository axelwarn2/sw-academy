    <section class="section form-section" id='form' data-forms='<?= json_encode($arParams) ?>'>
        <div class="form-section__text">
            <h2 class="form-section__header">{{form_title}}</h2>
            <p class="form-section__paragraph">{{form_subtitle}}</p>
        </div>
        <div class="form-section__form">
            <form action="index.php" method="post" class="form-section__form-element">
                <span class="form-section__input-wrapper">
                    <input type="text" class="form-section__input form-section__input_name" placeholder="Имя">
                </span>
                <span class="form-section__input-wrapper">
                    <input type="number" class="form-section__input form-section__input_phone" placeholder="Телефон">
                </span>
                <button class="form-section__button">{{ form_button }}</button>
            </form>
        </div>
    </section>

<script type="module" src="/templates/main/js/form.js"></script>
