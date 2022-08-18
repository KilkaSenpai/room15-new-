<?php

/**
 * Template Name: Home
 * Template Post Type: page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/
 *
 * @package igambler
 */

get_header();
?>
<img class="background" src="<?php echo get_template_directory_uri() ?>/assets/img/bg.png" alt="background room15" loading="lazy" decoding="async">
<div class="wrapper">
    <main id="top">
        <section class="main">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/main-bg.webp" type="image/webp">
                <img class="main__bg" src="<?php echo get_template_directory_uri() ?>/assets/img/main-bg.svg" alt="background main section">
            </picture>
            <div class="container">
                <div class="main__inner">
                    <div class="main__content">
                        <h1 class="main__title">Веб-студия Room15</h1>
                        <span class="main__subtitle">Запустим ваш бизнес в космос по земным ценам <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/rocket.png" alt="Rocket" loading="lazy"></span>
                        <div class="main__text">
                            <p><strong>SEO-продвижение</strong> и поддержка бизнеса на всех этапах проекта</p>
                        </div>
                        <button class="main__btn btn" type="button">Рассчитать проект</button>
                        <div class="main__nav">
                            <h2 class="main__nav-title">Навигация</h2>
                            <ul class="main__list list-style">
                                <li class="main__item">
                                    <a class="main__link" href="#">Услуги и цены</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="main__box">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/main-bg-planets1.webp" type="image/webp">
                            <img class="main__img" src="<?php echo get_template_directory_uri() ?>/assets/img/main-bg-planets1.svg" alt="Разработка сайтовв под ключ, SEO-продвижение и поддержка бизнеса на всех этапах проекта | room15.pro">
                        </picture>
                    </div>

                </div>
            </div>
        </section>
        <section class="skills">
            <div class="container">
                <div class="skills__inner">
                    <h2 class="skills__title title-style">Что мы умеем?</h2>
                    <ul class="skills__tabs">
                        <li class="skills__tab">
                            <button class="skills__btn active btn" type="button" onclick="openContent(event, 'skill-1')">Создание сайтов под ключ</button>
                        </li>
                        <li class="skills__tab">
                            <button class="skills__btn btn" type="button" onclick="openContent(event, 'skill-2')">Создание сайтов под ключ</button>
                        </li>
                    </ul>
                    <div class="skills__content active" id="skill-1">
                        <picture class="skills__img-wrap">
                            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/skill_1.webp" type="image/webp">
                            <img class="skills__img" src="<?php echo get_template_directory_uri() ?>/assets/img/skill_1.png" alt="skill image">
                        </picture>
                        <div class="skills__box">
                            <h3 class="skills__content-title">1Создание сайтов под ключ</h3>
                            <div class="skills__info">
                                <h4 class="skills__subtitle">От идеи до реализации всего один клик</h4>
                                <p class="skills__text">Воплотим в жизнь любой Ваш бизнес-проект</p>
                                <ul class="skills__list list-style">
                                    <li class="skills__item">
                                        <div class="skills__item-box">
                                            <span class="skills__name">Интернет Магазин</span>
                                            <span class="skills__count">От 2000$</span>
                                        </div>
                                    </li>
                                    <li class="skills__item">
                                        <div class="skills__item-box">
                                            <span class="skills__name">Интернет Магазин</span>
                                            <span class="skills__count">От 2000$</span>
                                        </div>
                                    </li>
                                    <li class="skills__item">
                                        <div class="skills__item-box">
                                            <span class="skills__name">Интернет Магазин</span>
                                            <span class="skills__count">От 2000$</span>
                                        </div>
                                    </li>
                                    <li class="skills__item">
                                        <div class="skills__item-box">
                                            <span class="skills__name">Интернет Магазин</span>
                                            <span class="skills__count">От 2000$</span>
                                        </div>
                                    </li>
                                    <li class="skills__item">
                                        <div class="skills__item-box">
                                            <span class="skills__name">Интернет Магазин</span>
                                            <span class="skills__count">От 2000$</span>
                                        </div>
                                    </li>
                                    <li class="skills__item">
                                        <div class="skills__item-box">
                                            <span class="skills__name">Интернет Магазин</span>
                                            <span class="skills__count">От 2000$</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="skills__more">
                                    <a class="skills__modal btn" href="#">Рассчитать проект</a>
                                    <a class="skills__link" href="#">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="skills__content" id="skill-2">
                        <picture class="skills__img-wrap">
                            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/skill_1.webp" type="image/webp">
                            <img class="skills__img" src="<?php echo get_template_directory_uri() ?>/assets/img/skill_1.png" alt="skill image">
                        </picture>
                        <div class="skills__box">
                            <h3 class="skills__content-title">2Создание сайтов под ключ</h3>
                            <div class="skills__info">
                                <h4 class="skills__subtitle">От идеи до реализации всего один клик</h4>
                                <p class="skills__text">Воплотим в жизнь любой Ваш бизнес-проект</p>
                                <ul class="skills__list list-style">
                                    <li class="skills__item">
                                        <div class="skills__item-box">
                                            <span class="skills__name">Интернет Магазин</span>
                                            <span class="skills__count">От 2000$</span>
                                        </div>
                                    </li>
                                    <li class="skills__item">
                                        <div class="skills__item-box">
                                            <span class="skills__name">Интернет Магазин</span>
                                            <span class="skills__count">От 2000$</span>
                                        </div>
                                    </li>
                                    <li class="skills__item">
                                        <div class="skills__item-box">
                                            <span class="skills__name">Интернет Магазин</span>
                                            <span class="skills__count">От 2000$</span>
                                        </div>
                                    </li>
                                    <li class="skills__item">
                                        <div class="skills__item-box">
                                            <span class="skills__name">Интернет Магазин</span>
                                            <span class="skills__count">От 2000$</span>
                                        </div>
                                    </li>
                                    <li class="skills__item">
                                        <div class="skills__item-box">
                                            <span class="skills__name">Интернет Магазин</span>
                                            <span class="skills__count">От 2000$</span>
                                        </div>
                                    </li>
                                    <li class="skills__item">
                                        <div class="skills__item-box">
                                            <span class="skills__name">Интернет Магазин</span>
                                            <span class="skills__count">От 2000$</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="skills__more">
                                    <a class="skills__modal btn" href="#">Рассчитать проект</a>
                                    <a class="skills__link" href="#">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="contact">
            <div class="container">
                <div class="contact__inner">
                    <div class="contact__content">
                        <h2 class="contact__title">Всегда готовы сделать лучшее предложение!</h2>
                        <form class="contact__form">
                            <input class="contact__field contact__input" type="text" placeholder="Имя" maxlength="20" required>
                            <input class="contact__field contact__input" type="email" placeholder="E-mail" required>
                            <input class="contact__field contact__input" type="tel" placeholder="Телефон" minlength="10" maxlength="14" title="Номер телефона составляет от 10 до 14 цифр."  required>
                            <input class="contact__field contact__input" type="text" placeholder="Промокод" title="Промокод состоит из 10 символов.">
                            <textarea class="contact__field contact__textarea" placeholder="Сообщение" minlength="10" maxlength="1000"></textarea>
                            <label class="contact__label" for="agree">
                                <input class="contact__box" type="checkbox" id="agree" required>
                                <span class="contact__check"></span>
                                <div class="contact__text">
                                    Я согласен с политикой обработки данных
                                </div>
                            </label>
                            <button class="contact__btn btn" type="submit">Рассчитать проект</button>
                        </form>
                    </div>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/contact-img.webp" type="image/webp">
                        <img class="contact__img" src="<?php echo get_template_directory_uri() ?>/assets/img/contact-img.png" alt="contact image">
                    </picture>
                </div>
            </div>
        </section>
        <section class="stack">
            <div class="container">
                <div class="stack__inner">
                    <div class="stack__content">
                        <h2 class="stack__title title-style">Стек Технологий</h2>
                        <div class="stack__box">
                            <h3 class="stack__subtitle">Опыт, Навыки, Экспертность</h3>
                            <div class="stack__text">Мы растили уровень экспертности, чтобы предлагать оптимальные решения для вашего бизнеса</div>
                            <ul class="stack__list list-style">
                                <li class="stack__item">Vue.js</li>
                                <li class="stack__item">Vue.js</li>
                                <li class="stack__item">Vue.js</li>
                                <li class="stack__item">Vue.js</li>
                                <li class="stack__item">Vue.js</li>
                                <li class="stack__item">Vue.js</li>
                            </ul>
                            <div class="stack__text">Эти технологии мы успешно применяем для создания корпоративных сайтов, магазинов, лендингов, каталогов, фриланс бирж, маркетплейсов, блогов и различных  веб-сервисов.</div>
                        </div>
                    </div>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/about-stack.webp" type="image/webp">
                        <img class="stack__img" src="<?php echo get_template_directory_uri() ?>/assets/img/about-stack.svg" alt="stack image">
                    </picture>
                </div>
            </div>
        </section>
        <section class="promo">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/promo-bg.webp" type="image/webp">
                <img class="promo__bg" src="<?php echo get_template_directory_uri() ?>/assets/img/promo-bg.png" alt="promo background image">
            </picture>
            <div class="container">
                <div class="promo__inner">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/promo-img.webp" type="image/webp">
                        <img class="promo__img" src="<?php echo get_template_directory_uri() ?>/assets/img/promo-img.png" alt="promo image">
                    </picture>
                    <div class="promo__content">
                        <h2 class="promo__title">Оставляй заявку прямо сейчас и получи скидку <span>5%</span> от итоговой стоимости проекта</h2>
                        <button class="promo__btn btn" type="button">Рассчитать проект</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="benefits">
            <div class="container">
                <div class="benefits__inner">
                    <h2 class="benefits__title title-style">Почему мы?</h2>
                    <ul class="benefits__list">
                        <li class="benefits__item">
                            <div class="benefits__box">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/benefits-1.webp" type="image/webp">
                                    <img class="benefits__img" src="<?php echo get_template_directory_uri() ?>/assets/img/benefits-1.png" alt="benefits icon one">
                                </picture>
                                <h3 class="benefits__subtitle">Комплексный подход</h3>
                            </div>
                            <div class="benefits__text">
                                Мы предоставляем полный спектр Digital услуг для вашего бизнеса. От создания технического задания и прототипа проекта до запуска в сети, в максимально кратчайшие сроки.
                            </div>
                        </li>
                        <li class="benefits__item">
                            <div class="benefits__box">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/benefits-1.webp" type="image/webp">
                                    <img class="benefits__img" src="<?php echo get_template_directory_uri() ?>/assets/img/benefits-1.png" alt="benefits icon one">
                                </picture>
                                <h3 class="benefits__subtitle">Комплексный подход</h3>
                            </div>
                            <div class="benefits__text">
                                Мы предоставляем полный спектр Digital услуг для вашего бизнеса. От создания технического задания и прототипа проекта до запуска в сети, в максимально кратчайшие сроки.
                            </div>
                        </li>
                        <li class="benefits__item">
                            <div class="benefits__box">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/benefits-1.webp" type="image/webp">
                                    <img class="benefits__img" src="<?php echo get_template_directory_uri() ?>/assets/img/benefits-1.png" alt="benefits icon one">
                                </picture>
                                <h3 class="benefits__subtitle">Комплексный подход</h3>
                            </div>
                            <div class="benefits__text">
                                Мы предоставляем полный спектр Digital услуг для вашего бизнеса. От создания технического задания и прототипа проекта до запуска в сети, в максимально кратчайшие сроки.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <script>
        (function init100vh(){
            function setHeight() {
                var vh = window.innerHeight * 0.01;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
            }
            setHeight();
            window.addEventListener('resize', setHeight);
        })();
    </script>
    <script>
        if(innerWidth >= 992) {
            function openContent(evt, contentName) {
                var i, tabcontent, tablinks;
                tabcontent = document.querySelectorAll(".skills__content");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.querySelectorAll(".skills__btn");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(contentName).style.display = "flex";
                evt.currentTarget.className += " active";
            }
        }
        if(innerWidth <= 991) {
            const tabs = () => {
                document.addEventListener('click', function (e) {
                   let target = e.target;
                   if(target.closest('.skills__content-title')) {
                       target.parentElement.classList.toggle('active')
                   }
                });
            }
            tabs();
        }

    </script>
<?php
get_footer(); ?>