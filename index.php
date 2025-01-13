<?php

$kw = '';
// Keywords for SEO
$desc = '';
// Description for SEO
$title = 'Главная';
$page = 'index';

include 'partials/header.php' ?>

<main class='main' style='margin-top: 0px !important;'>
    <!-- <svg>
        <use xlink:href='/assets/icons/sprite.svg#arrow-header'></use>
    </svg> -->




    <section class="swiper main__slider ">
        <div class="border border1"></div>
        <div class="border border2"></div>
        <div class="border border3"></div>

        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="top">
                    <img src="/assets/images/slider-bg/1.webp" alt="">

                    <div class="top__row">
                        <div class="top__row__left">
                            <div class="top__row__left-title">
                                Железнодорожные грузоперевозки
                            </div>
                            <a href="" class="top__row__left-link">
                                подробнее
                                <svg>
                                    <use xlink:href="/assets/icons/sprite.svg#arrow-header"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="top__row__right">
                            Предоставление вагонов в пользование
                        </div>
                    </div>



                </div>
            </div>
            <div class="swiper-slide">
                <div class="top">
                    <img src="/assets/images/slider-bg/2.webp" alt="">

                    <div class="top__row">
                        <div class="top__row__left">
                            <div class="top__row__left-title">
                                Железнодорожные грузоперевозки
                            </div>
                            <a href="" class="top__row__left-link">
                                подробнее
                                <svg>
                                    <use xlink:href="/assets/icons/sprite.svg#arrow-header"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="top__row__right">
                            Предоставление вагонов в пользование
                        </div>
                    </div>



                </div>
            </div>
            <div class="swiper-slide">
                <div class="top">
                    <img src="/assets/images/slider-bg/3.webp" alt="">

                    <div class="top__row">
                        <div class="top__row__left">
                            <div class="top__row__left-title">
                                Железнодорожные грузоперевозки
                            </div>
                            <a href="" class="top__row__left-link">
                                подробнее
                                <svg>
                                    <use xlink:href="/assets/icons/sprite.svg#arrow-header"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="top__row__right">
                            Предоставление вагонов в пользование
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle style="stroke-width: 1px;" cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div>
    </section>

    <section class="work container-fluid">
        <div class="work_image">
            <img src="/assets/images/index/work-img1.png" alt="work1">
        </div>
        <div class="work_info">
            <div class="work_info-teg">
                <div></div>
                <p>About Our Work</p>
            </div>
            <h3 class="work_info-title">
                Our Main Goal to Satisfied
                local & Global Clients
            </h3>
            <div class="work_info-text">
                <p>Hutch Web Solutions, маяк креативности и функциональности в цифровой сфере. Наше агентство — ваш
                    надежный партнер в создании онлайн-опытов, которые находят отклик. С непоколебимой приверженностью
                    инновациям.</p>
            </div>

            <div class="work_info_cards">
                <div class="work_info_cards_card">
                    <i class="fa-solid fa-pen-nib"></i>
                    <h4>Качественный веб-дизайн</h4>
                    <p>Архитектурное проектирование и планирование Визуальное проектирование объектов
                        Аудиопроектирование объектов Строительство</p>
                </div>
                <div class="work_info_cards_card">
                    <i class="fa-solid fa-users-gear"></i>
                    <h4>Опытная команда</h4>
                    <p>Архитектурное проектирование и планирование Визуальное проектирование объектов
                        Аудиопроектирование объектов Строительство</p>
                </div>
            </div>
        </div>
    </section>

    <section class="slider_line swiper">

        <div class="swiper-wrapper">
            <?php for ($i = 0; $i < 20; $i++) : ?>
            <div class="swiper-slide">
                <div>
                    <i class="fa-solid fa-star"></i>
                    <p>Мы любим то, что делаем</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div>
                    <i class="fa-solid fa-star"></i>
                    <p>Мы любим работать</p>
                </div>
            </div>
            <?php endfor ?>
        </div>
    </section>

    <section class="about container-fluid">
        <div class="about_info">
            <div class="about_info-teg">
                <div></div>
                <p>About Company</p>
            </div>
            <h3 class="about_info-title">Our Main Goal to Satisfied
                local & Global Clients</h3>
            <div class="about_info_buttons">
                <button class="tablinks active" onclick="openCity(event, 'London')">Наше миссия</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Наше видение</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Наше цель</button>
            </div>
            <div class="about_info_tabs">

                <div id="London" class="about_info_tabs_tab tabcontent active">
                    <h4>Агентство цифрового веб-дизайна</h4>
                    <p>Веб-дизайн-агентство — это многогранная организация, которая играет ключевую роль в формировании
                        цифрового присутствия как предприятий, так и отдельных лиц. Эти агентства — динамичные центры
                        креативности, технической экспертизы и стратегического мышления.
                        <br>
                        <br>
                        В основе деятельности агентства веб-дизайна лежит мастерство визуального повествования и
                        создания пользовательского опыта.
                    </p>
                </div>
                <div id="Paris" class="about_info_tabs_tab tabcontent">
                    <h4>Агентство цифрового веб-дизайна</h4>
                    <p>Веб-дизайн-агентство — это многогранная организация, которая играет ключевую роль в формировании
                        цифрового присутствия как предприятий, так и отдельных лиц. Эти агентства — динамичные центры
                        креативности, технической экспертизы и стратегического мышления.
                        <br>
                        <br>
                        В основе деятельности агентства веб-дизайна лежит мастерство визуального повествования и
                        создания пользовательского опыта.
                    </p>
                </div>
                <div id="Tokyo" class="about_info_tabs_tab tabcontent">
                    <h4>Агентство цифрового веб-дизайна</h4>
                    <p>Веб-дизайн-агентство — это многогранная организация, которая играет ключевую роль в формировании
                        цифрового присутствия как предприятий, так и отдельных лиц. Эти агентства — динамичные центры
                        креативности, технической экспертизы и стратегического мышления.
                        В основе деятельности агентства веб-дизайна лежит мастерство визуального повествования и
                        создания пользовательского опыта.
                    </p>
                </div>

            </div>
        </div>
        <div class="about_img">
            <div class="about_img_big">
                <img src="/assets/images/index/about-big.png" alt="">
            </div>
            <div class="about_img_small">
                <img src="/assets/images/index/about-small.png" alt="">
            </div>
            <div class="about_img-circle"></div>
            <div class="about_img-bordercircle"></div>
        </div>
    </section>

    <section class="friends container-fluid">
        <div class="friends_teg">
            <div class="friends_teg-left"></div>
            <p>Члены команды</p>
            <div class="friends_teg-right"></div>
        </div>
        <div class="friends-title">
            Профессионалы своего дела!
        </div>
        <div class="friends_cards">
            <div class="friends_cards_card">
                <div class="friends_cards_card-img">
                    <img src="/assets/images/about/person1.jpg" alt="">
                    <div>
                        <a href=""><i class="fa-brands fa-telegram"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="friends_cards_card-name">
                    Шарофов Ёкуб
                </div>
                <div class="friends_cards_card-post">
                    Frontend Разработчик
                </div>
            </div>
            <div class="friends_cards_card">
                <div class="friends_cards_card-img">
                    <img src="/assets/images/about/person2.png" alt="">
                    <div>
                        <a href=""><i class="fa-brands fa-telegram"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="friends_cards_card-name">
                    Шарофов Ёкуб
                </div>
                <div class="friends_cards_card-post">
                    Frontend Разработчик
                </div>
            </div>
            <div class="friends_cards_card">
                <div class="friends_cards_card-img">
                    <img src="/assets/images/about/person2.png" alt="">
                    <div>
                        <a href=""><i class="fa-brands fa-telegram"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="friends_cards_card-name">
                    Шарофов Ёкуб
                </div>
                <div class="friends_cards_card-post">
                    Frontend Разработчик
                </div>
            </div>
            <div class="friends_cards_card">
                <div class="friends_cards_card-img">
                    <img src="/assets/images/about/person2.png" alt="">
                    <div>
                        <a href=""><i class="fa-brands fa-telegram"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="friends_cards_card-name">
                    Шарофов Ёкуб
                </div>
                <div class="friends_cards_card-post">
                    Frontend Разработчик
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'partials/footer.php' ?>