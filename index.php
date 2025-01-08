<?php

$kw = '';
// Keywords for SEO
$desc = '';
// Description for SEO
$title = 'Главная';
$page = 'index';

include 'partials/header.php' ?>

<main class='main' style='margin-top: 0px !important; height: 100vh;'>
    <!-- <svg>
        <use xlink:href='/assets/icons/sprite.svg#arrow-header'></use>
    </svg> -->

    <section style="bacground: white; height: 300px;" class="splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><img style="width: 100%; height: 1000px;"
                        src="/assets/images/slider-bg/01.jpg" alt=""></li>
            </ul>
        </div>
    </section>

</main>

<?php include 'partials/footer.php' ?>