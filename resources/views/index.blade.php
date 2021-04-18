<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тур Агенство</title>
    <link rel="stylesheet" href="{{URL::to('/assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{URL::to('/assets/css/style.css') }}">
</head>
<body>
<header class="main-header">
    <div class="flex-row">
        <div class="logo">
            <div class="logo-image"></div>
            <h1 class="logo-name">GenericTravelName</h1>
        </div>
        <nav class="navbar">
            <a href="#">Головна</a>
            <a href="#">Тури</a>
            <a href="#">Контакти</a>
            <a href="#">Про нас</a>
            <a class="search-nav" href="#"><i class="fas fa-search"></i>Пошук</a>
        </nav>
    </div>

</header>
<section class="slider">
    <div class="container">
        <div class="flex-row">
            <div class="arrow arrow-left"></div>
            <div class="slider-content">
                <h2 class="slider-content-title">
                    Гарячі путівки по всій Україні
                </h2>
                <h3 class="slider-content-subtitle">
                    Найкращі пропозиції тільки у нас!
                </h3>
                <div class="btn-block">
                    <button class="btn">Дізнатись більше</button>
                </div>
            </div>
            <div class="arrow arrow-right"></div>
        </div>
    </div>
</section>
<section class="tours-section">
    <div class="container">
        <h2 class="tour-section-title">Наші гарячі тури та путівки</h2>
        <h3 class="tour-section-subtitle">За приємною ціною!</h3>
        <pre>{{$tours}}</pre>
        <div class="tours-cards">
            <div class="flex-row">
                <div class="tour-card">
                    <div class="tour-pricelist">
                        <p class="tour-price">300$</p>
                        <p class="tour-days">7 ноч.</p>
                    </div>
                    <h4 class="tour-city">Київ</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: 01.01.2021
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: Lorem Ipsum Standard
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tour-card" style="background-image: url({{URL::to('/assets/img/Odesa.png') }});">
                    <div class="tour-pricelist">
                        <p class="tour-price">300$</p>
                        <p class="tour-days">7 ноч.</p>
                    </div>
                    <h4 class="tour-city">Одеса</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: 01.01.2021
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: Lorem Ipsum Standard
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tour-card" style="background-image: url({{URL::to('/assets/img/Kharkiv.png') }});">
                    <div class="tour-pricelist">
                        <p class="tour-price">300$</p>
                        <p class="tour-days">7 ноч.</p>
                    </div>
                    <h4 class="tour-city">Харків</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: 01.01.2021
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: Lorem Ipsum Standard
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tour-card" style="background-image: url({{URL::to('/assets/img/lviv.png') }});">
                    <div class="tour-pricelist">
                        <p class="tour-price">300$</p>
                        <p class="tour-days">7 ноч.</p>
                    </div>
                    <h4 class="tour-city">Львів</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: 01.01.2021
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: Lorem Ipsum Standard
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tour-card" style="background-image: url({{URL::to('/assets/img/dnipro.png') }});">
                    <div class="tour-pricelist">
                        <p class="tour-price">300$</p>
                        <p class="tour-days">7 ноч.</p>
                    </div>
                    <h4 class="tour-city">Дніпро</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: 01.01.2021
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: Lorem Ipsum Standard
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tour-card" style="background-image: url({{URL::to('/assets/img/vinnitsa.png') }});">
                    <div class="tour-pricelist">
                        <p class="tour-price">300$</p>
                        <p class="tour-days">7 ноч.</p>
                    </div>
                    <h4 class="tour-city">Вінниця</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: 01.01.2021
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: Lorem Ipsum Standard
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="read-more">
            <div class="arrow"></div>
        </div>
    </div>
</section>
<section class="consult-section">
    <div class="container">
        <h3 class="consult-subtitle">Досі не знаєте що вибрати?</h3>
        <h2 class="consult-title">Проконсультуйтесь з нами</h2>
        <p class="consult-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut duis tortor vitae pellentesque egestas quam pulvinar. Pellentesque porttitor velit sit pellentesque. Suspendisse donec pretium id dignissim. Dignissim ultrices eget orci viverra. Egestas quis et ut ultrices imperdiet lectus nulla tempus. Pharetra lorem sem purus nisi libero viverra ipsum.</p>
        <div class="btn-block">
            <button class="btn">Зв'язатися з нами</button>
        </div>
    </div>
</section>

<section class="search-section">
    <div class="container">
        <h2 class="search-title">Знайдіть тур саме для вас</h2>
        <div class="advanced-search">
            <div class="grid-container">
                <div class="search-by-word">
                    <p><i class="fas fa-search"></i>Пошук</p>
                </div>
                <div class="search-by-rating">
                    <i class="fas fa-hotel"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="search-by-city">
                    <p>Усі міста</p>
                </div>
                <div class="search-by-nights">
                    <p>7-8</p>
                </div>
                <div class="search-by-persons">
                    <p>1-2</p>
                </div>
                <div class="search-by-from">
                    <p>Україна</p>
                </div>
            </div>


        </div>
        <div class="tours-cards">
            <div class="flex-row">
                <div class="tour-card">
                    <div class="tour-pricelist">
                        <p class="tour-price">300$</p>
                        <p class="tour-days">7 ноч.</p>
                    </div>
                    <h4 class="tour-city">Київ</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: 01.01.2021
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: Lorem Ipsum Standard
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tour-card" style="background-image: url({{URL::to('/assets/img/Odesa.png') }});">
                    <div class="tour-pricelist">
                        <p class="tour-price">300$</p>
                        <p class="tour-days">7 ноч.</p>
                    </div>
                    <h4 class="tour-city">Одеса</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: 01.01.2021
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: Lorem Ipsum Standard
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tour-card" style="background-image: url({{URL::to('/assets/img/kharkiv.png') }});">
                    <div class="tour-pricelist">
                        <p class="tour-price">300$</p>
                        <p class="tour-days">7 ноч.</p>
                    </div>
                    <h4 class="tour-city">Харків</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: 01.01.2021
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: Lorem Ipsum Standard
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tour-card" style="background-image: url({{URL::to('/assets/img/lviv.png') }});">
                    <div class="tour-pricelist">
                        <p class="tour-price">300$</p>
                        <p class="tour-days">7 ноч.</p>
                    </div>
                    <h4 class="tour-city">Львів</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: 01.01.2021
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: Lorem Ipsum Standard
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tour-card" style="background-image: url({{URL::to('/assets/img/dnipro.png') }});">
                    <div class="tour-pricelist">
                        <p class="tour-price">300$</p>
                        <p class="tour-days">7 ноч.</p>
                    </div>
                    <h4 class="tour-city">Дніпро</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: 01.01.2021
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: Lorem Ipsum Standard
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tour-card" style="background-image: url({{URL::to('/assets/img/vinnitsa.png') }});">
                    <div class="tour-pricelist">
                        <p class="tour-price">300$</p>
                        <p class="tour-days">7 ноч.</p>
                    </div>
                    <h4 class="tour-city">Вінниця</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: 01.01.2021
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: Lorem Ipsum Standard
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tour-card" style="background-image: url({{URL::to('/assets/img/vinnitsa.png') }});">
                    <div class="tour-pricelist">
                        <p class="tour-price">300$</p>
                        <p class="tour-days">7 ноч.</p>
                    </div>
                    <h4 class="tour-city">Вінниця</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: 01.01.2021
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: Lorem Ipsum Standard
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tour-card" style="background-image: url({{URL::to('/assets/img/vinnitsa.png') }});">
                    <div class="tour-pricelist">
                        <p class="tour-price">300$</p>
                        <p class="tour-days">7 ноч.</p>
                    </div>
                    <h4 class="tour-city">Вінниця</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: 01.01.2021
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                Готель: Lorem Ipsum Standard
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="read-more">
            <div class="arrow"></div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <div class="faq-question-block">
            <h3 class="faq-section-question">Чому обирають нас?</h3>
            <p class="faq-section-response">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates blanditiis totam rem cupiditate, natus molestiae enim. Ex deleniti labore dolorum officia ipsa ducimus placeat earum provident cumque corrupti, minus beatae.</p>
        </div>
        <div class="faq-question-block">
            <h3 class="faq-section-question">Тури від GenericTravelName</h3>
            <p class="faq-section-response">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates blanditiis totam rem cupiditate, natus molestiae enim. Ex deleniti labore dolorum officia ipsa ducimus placeat earum provident cumque corrupti, minus beatae.</p>
        </div>
        <div class="faq-question-block">
            <h3 class="faq-section-question">О компанії - GenericTravelName</h3>
            <p class="faq-section-response">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates blanditiis totam rem cupiditate, natus molestiae enim. Ex deleniti labore dolorum officia ipsa ducimus placeat earum provident cumque corrupti, minus beatae.</p>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <h2 class="contact-title">
            Наші Контакти
        </h2>
        <address>
            <p>8 (812) 234-56-55</p>
            <p>М. Одеса, вул. ільфа і петрова 18-б</p>
            <p>GenericTravelName@mail.ru</p>
        </address>

        <p class="copyright">
            All rights reserved (c) 2021
        </p>
    </div>
</footer>


<script src="https://kit.fontawesome.com/9cb0211d53.js" crossorigin="anonymous"></script>
</body>
</html>
