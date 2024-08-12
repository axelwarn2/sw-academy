<main class="main">
    <section class="hero" id="hero">
        <div class="hero__content">
            <h1 class="hero__title">{{ hero_title }}</h1>
            <p class="hero__subtitle">{{ hero_title }}</p>
            <p class="hero__location">{{ hero_location }}</p>
        </div>
        <button class="button hero__button hero__button_secondary">{{ hero_button }}</button>
    </section>

    <script>
        Vue.createApp({
            data() {
                const params = <?= json_encode($arParams) ?>;
                console.log("hero", params)
                return {
                    ...params
                    // title: "ЗАКАЗЫВАЙТЕ КУХНЮ ОТ ПРОИЗВОДИТЕЛЯ",
                    // subtitle: "Высокое качество, профессиональный подход и креативные решения",
                    // location: "Работаем по Тюмени и Тюменской области",
                    // heroButton: "Оставить заявку",
                };
            },
        }).mount("#hero");
    </script>
