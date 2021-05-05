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
            <h1 class="logo-name">GenericTravelName {{ auth()->user() }}</h1>
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
        <div class="tours-cards">
            <div class="flex-row">
                @foreach($tours as $tour)
                <div class="tour-card" style="background-image: url({{ URL::to($tour->photo_url) }});">
                    <div class="tour-pricelist">
                        <p class="tour-price">{{$tour->price}} $</p>
                        <p class="tour-days">{{$tour->days_amount}} ноч.</p>
                    </div>
                    <h4 class="tour-city">{{$tour->tour_focus}}</h4>
                    <div class="tour-info">
                        <p class="date-from">
                            Виїзд: {{$tour->tour_date}}
                        </p>
                        <div class="flex-row">
                            <p class="hotel">
                                {{$tour->hotel->hotel_name}}
                            </p>
                            <p class="place-from">
                                Виліт: Київ
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
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
            <form class="advanced-search-form">
                <div class="form-group search-input-group">
                    <input type="text" id="searchInput" name="tourName" placeholder="Пошук">
                </div>
                <div class="advanced-search-toggled">
                    <div class="form-row">
                        <label class="checkbox-container">
                            <span class="checkbox-name">Раніше заброньовані</span>
                            <input type="checkbox" name="earlyBooked">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox-container">
                            <span class="checkbox-name">Екскурсійні тури</span>
                            <input type="checkbox" name="guideTour">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox-container">
                            <span class="checkbox-name">Туристичні страховки</span>
                            <input type="checkbox" name="touristInsurance">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox-container">
                            <span class="checkbox-name">Тури на свята</span>
                            <input type="checkbox" name="holidaysTour">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox-container">
                            <span class="checkbox-name">Пакетні тури</span>
                            <input type="checkbox" name="packTour">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox-container">
                            <span class="checkbox-name">Тести і довідки на COVID-19</span>
                            <input type="checkbox" name="covidTests">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox-container">
                            <span class="checkbox-name">Корпоративні тури</span>
                            <input type="checkbox" name="corpTours">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="dateFrom">Від</label>
                            <input type="date" name="dateFrom" id="dateFrom">
                        </div>
                        <div class="form-group">
                            <label for="daysAmount">Кількість днів</label>
                            <input type="number" name="daysAmount" id="daysAmount">
                        </div>
                        <button type="submit">Знайти</button>

                    </div>

                </div>
                <p class="advanced-search-switcher">Розширений пошук</p>
            </form>
        </div>
        <div class="tours-cards">
            <div class="flex-row">
                @foreach($tours as $tour)
                   <div class="tour-card" style="background-image: url({{ URL::to($tour->photo_url) }});">
                      <div class="tour-pricelist">
                            <p class="tour-price">{{$tour->price}} $</p>
                           <p class="tour-days">{{$tour->days_amount}} ноч.</p>
                      </div>
                       <h4 class="tour-city">{{$tour->tour_focus}}</h4>
                       <div class="tour-info">
                            <p class="date-from">
                                Виїзд: {{$tour->tour_date}}
                            </p>--}}
                            <div class="flex-row">
                               <p class="hotel">
                                   {{$tour->hotel->hotel_name}}
                               </p>--}}
                                <p class="place-from">
                                   Виліт: Київ
                                </p>
                           </div>
                       </div>
                    </div>
                @endforeach
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
<script src="{{URL::to('assets/js/app.js')}}"></script>
</body>
</html>
