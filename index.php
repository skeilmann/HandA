<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMMO Gold - Your Home and Apartments Partner</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <style><?php include_once './css/style.css'; ?></style>
    <link href="./img/favicon.png" rel="icon" type="image/svg+xml" />
    <script src="./js/swiper.min.js" defer></script>
    <script src="./js/swiper-init.js" defer></script>
    <script src="./js/hamburger.js" defer></script>
</head>

<body class="page">
    <header class="header">
        <div class="container header__container">
            <button class="hamburger hamburger--spin" type="button" aria-controls="navigation" aria-expanded="true"
                aria-label="Menu">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <a class="logo header__logo">
                <img class="logo" src="./img/logo.png" alt="Logo of HandA company">
            </a>
            <div class="header__wrap">
                <div class="header__container-1">
                    <div class="header__links">
                        <a href="tel:+40733570552" class="link header__link header__link-phone">Call us +40733570552</a>
                        <a href="mailto:gheorghe91@hotmail.com" class=" link header__link header__link-email">Email us
                            gheorghe91@hotmail.com</a>
                    </div>
                    <button class="btn-reset btn btn-header">
                        Log in
                    </button>
                </div>
                <div class="header__container-2">
                    <nav class="nav header__nav">
                        <ul class="nav__list list-reset">
                            <li class="nav__item">
                                <a href="#about" class="link nav__link">About us</a>
                            </li>
                            <li class="nav__item">
                                <a href="#apartments" class="link nav__link">Apartments</a>
                            </li>
                            <li class="nav__item">
                                <a href="#renovation" class="link nav__link">Renovation</a>
                            </li>
                            <li class="nav__item">
                                <a href="#find" class="link nav__link">Find us</a>
                            </li>
                            <li class="nav__item">
                                <a href="#contact" class="link nav__link">Contact us</a>
                            </li>
                            <li class="nav__item">
                                <a href="#fav" class="link nav__link">Favorites</a>
                            </li>
                            <li class="nav__item">
                                <button class="btn-reset btn btn-header">
                                    Log in
                                </button>
                            </li>
                        </ul>
                    </nav>
                    <div class="lang">
                        <!-- <span class="header__lang"> Choose prefered language</span> -->
                        <div class="lang__flags">
                            <div class="flag flag-de"></div>
                            <div class="flag flag-us"></div>
                            <div class="flag flag-ua"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero__container">
                <div class="hero__article">
                    <span class="hero__subtitle">IMMO GOLD - we are here to help you to </span>
                    <h1 class="title hero__title">Discover Quality Homes and Apartments</h1>
                    <div class="hero__nav">
                        <button class="btn hero__btn">Renovate</button>
                        <button class="btn hero__btn">Buy</button>
                        <button class="btn hero__btn">Sell</button>
                    </div>
                </div>

                <!-- Slider main container -->
                <div class="swiper-1 swiper">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><img src="./img/hero_1.jpeg" alt=""></div>
                        <div class="swiper-slide"><img src="./img/hero_2.jpeg" alt=""></div>
                        <div class="swiper-slide"><img src="./img/hero_3.jpeg" alt=""></div>
                        <div class="swiper-slide"><img src="./img/hero_4.jpeg" alt=""></div>
                    </div>
                </div>

            </div>
        </section>

        <section id="about" class="about">
            <div class="container">
                <span class="hero__subtitle subtitle">(00) Who we are </span>
                <h2 class="title section__title">About us</h2>
                <p class="about__descr">At IMMO GOLD GmbH, we breathe life into spaces. As a dynamic real estate
                    agency, we specialize in the art of transforming houses and apartments into cherished homes. With a
                    passion for real estate, our team is dedicated to curating exceptional buying
                    and selling experiences. From securing the perfect property to orchestrating renovations that bring
                    dreams to reality, we pride ourselves on turning every transaction into a golden opportunity.
                    Discover the essence of fine living with IMMO GOLD GmbH – where properties are more than just
                    spaces, they're legacies.</p>
            </div>
        </section>

        <section id="apartments" class="apart">
            <div class="container apart__container">
                <span class="hero__subtitle subtitle">(01) I'm looking for: </span>
                <h2 class="title section__title">Apartments</h2>
                <div class="swiper swiper-2">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card__category">kaufen</div>
                            <div class="card apart__item">
                                <img src="./img/apart-1.jpeg" alt="" class="apart__item-img">
                                <div class="card__descr">
                                    <h3 class="title card__title">Haus in Manshousen</h3>
                                    <div class="card__price">585 000 &euro;</div>
                                    <div class="card__icons">
                                        <div class="card__icon-wrap">
                                            <div class="card__icon card__icon-1"></div>
                                            <div class="card__icon-text card__bed-numb"></div>
                                        </div>
                                        <div class="card__icon-wrap">
                                            <div class="card__icon card__icon-2"></div>
                                            <div class="card__icon-text card__shower-numb"></div>
                                        </div>
                                        <div class="card__icon-wrap">
                                            <div class="card__icon card__icon-3"></div>
                                            <div class="card__icon-text card__park-numb"></div>
                                        </div>
                                        <div class="card__icon-wrap active">
                                            <div class="card__icon card__icon-4"></div>
                                            <div class="card__icon-text card__area-m">140 m<sup>2</sup></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card__category">kaufen</div>
                            <div class="card apart__item">
                                <img src="./img/apart-2.jpeg" alt="" class="apart__item-img">
                                <div class="card__descr">
                                    <h3 class="title card__title">Haus in Manshousen</h3>
                                    <div class="card__price">585 000 &euro;</div>
                                    <div class="card__icons">
                                        <div class="card__icon-wrap">
                                            <div class="card__icon card__icon-1"></div>
                                            <div class="card__icon-text card__bed-numb"></div>
                                        </div>
                                        <div class="card__icon-wrap">
                                            <div class="card__icon card__icon-2"></div>
                                            <div class="card__icon-text card__shower-numb"></div>
                                        </div>
                                        <div class="card__icon-wrap">
                                            <div class="card__icon card__icon-3"></div>
                                            <div class="card__icon-text card__park-numb"></div>
                                        </div>
                                        <div class="card__icon-wrap active">
                                            <div class="card__icon card__icon-4"></div>
                                            <div class="card__icon-text card__area-m">140 m<sup>2</sup></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card__category">kaufen</div>
                            <div class="card apart__item">
                                <img src="./img/apart-3.jpeg" alt="" class="apart__item-img">
                                <div class="card__descr">
                                    <h3 class="title card__title">Haus in Manshousen</h3>
                                    <div class="card__price">585 000 &euro;</div>
                                    <div class="card__icons">
                                        <div class="card__icon-wrap">
                                            <div class="card__icon card__icon-1"></div>
                                            <div class="card__icon-text card__bed-numb"></div>
                                        </div>
                                        <div class="card__icon-wrap">
                                            <div class="card__icon card__icon-2"></div>
                                            <div class="card__icon-text card__shower-numb"></div>
                                        </div>
                                        <div class="card__icon-wrap">
                                            <div class="card__icon card__icon-3"></div>
                                            <div class="card__icon-text card__park-numb"></div>
                                        </div>
                                        <div class="card__icon-wrap active">
                                            <div class="card__icon card__icon-4"></div>
                                            <div class="card__icon-text card__area-m">140 m<sup>2</sup></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="apart__item--more">
                                <a class="card__link--more">Show more!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="navigation navigation-2">
                    <div class="swiper-button-prev prev-2 btn"></div>
                    <div class="swiper-button-next next-2 btn"></div>
                </div>
            </div>

        </section>
        <section class="house">
            <div class="container house__container">
                <span class="hero__subtitle subtitle">(02) I'm looking for: </span>
                <h2 class="title section__title">Houses</h2>
            </div>
        </section>
        <section id="gallery" class="gallery">
            <div class="container gallery__container">
                <span class="hero__subtitle subtitle">(03) I'm looking for: </span>
                <h2 class="title section__title">Gallery</h2>

                <div class="gallery__swiper-wrap">
                    <!-- Slider main container -->
                    <div class="swiper swiper-3">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="gallery__slide-name">Astoria</div>
                                <img class="gallery__img" src="./img/gallery_1.jpeg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery__slide-name">Astoria</div>
                                <img class="gallery__img" src="./img/gallery_3.jpeg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery__slide-name">Astoria</div>
                                <img class="gallery__img" src="./img/gallery_1.jpeg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery__slide-name">Astoria</div>
                                <img class="gallery__img" src="./img/gallery_3.jpeg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery__slide-name">Astoria</div>
                                <img class="gallery__img" src="./img/gallery_1.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination pagination-3"></div>
                    <!-- If we need navigation buttons -->
                    <div class="navigation navigation-3">
                        <div class="swiper-button-prev btn prev-3"></div>
                        <div class="swiper-button-next btn next-3"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="find" class="find">
            <div class="container">
                <span class="hero__subtitle subtitle">(04) Here you can: </span>
                <h2 class="title section__title">Find us</h2>
                <div class="find__map map__container"></div>
            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container">
                <span class="hero__subtitle subtitle">(05) Here you can: </span>
                <h2 class="title section__title">Contact us</h2>
                <div class="contact__wrap">
                    <div class="contact__side contact__side--left">
                        <p class="contact__descr">We&nbsp;enjoy connecting with new people. Reach out to&nbsp;us
                            by&nbsp;filling out the form, sending an&nbsp;email, or&nbsp;simply giving&nbsp;us
                            a&nbsp;call.</p>
                    </div>
                    <div class="contact__side contact__side--right">
                        <form class="contact__form" action="POST" method="post">
                            <label class="contact__label" for="fname"> Hello, my first name is
                                <input id="fname" class="contact__input contact__input--name" name="fname" type="text"
                                    placeholder="First name" required>
                            </label>
                            <label class="contact__label" for="lname"> And my last name is
                                <input id="lname" class="contact__input contact__input--name" name="lname" type="text"
                                    placeholder="Last name" required>
                            </label>
                            <label class="contact__label" for="tel"> My phone is
                                <input id="tel" class="contact__input contact__input--tel" name="telephone" type="tel"
                                    placeholder="+00 00 000 000" required>
                            </label>
                            <label class="contact__label" for="email"> My email is
                                <input id="email" class="contact__input contact__input--email" name="email" type="email"
                                    placeholder="example@gmail.com" required>
                            </label>
                            <label class="contact__label contact__label--mess" for="message"> My message
                                <textarea class="contact__input contact__input--mess" name="message" id="message"
                                    cols="30" rows="10" placeholder="I would like to ask about ..."></textarea>
                            </label>
                            <label class="checkbox">
                                <input class="checkbox__box visually-hidden" type="checkbox" checked="checked"
                                    name="agree" />
                                <span class="checkbox__visual" role="checkbox" aria-checked="true"></span>
                                <span class="checkbox__text">Accept site <a href=""
                                        class="contacts__link-conditions">policy and conditions</a></span>
                            </label>
                            <button class="btn contact__btn" type="submit">
                                <span class="btn-text"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__section footer__section_up">
                <a class="logo header__logo">
                    <img class="logo" src="./img/logo.png" alt="Logo of HandA company">
                </a>
                <span class="footer__logo-desc">A real estate company</span>
            </div>
            <div class="footer__section footer__section_middle">
                <ul class="list-reset footer__list">
                    <li class="footer__item">Search</li>
                    <li class="footer__item"><a href="#" class="link nav__link footer__link">Apartment</a></li>
                    <li class="footer__item"><a href="#" class="link nav__link footer__link">Home</a></li>
                    <li class="footer__item"><a href="#" class="link nav__link footer__link">Renovation</a></li>
                </ul>
                <ul class="list-reset footer__list">
                    <li class="footer__item">About</li>
                    <li class="footer__item"><a href="#" class="link nav__link footer__link">Careers</a></li>
                    <li class="footer__item"><a href="#" class="link nav__link footer__link">Blog</a></li>
                    <li class="footer__item"><a href="#" class="link nav__link footer__link">Contact</a></li>
                </ul>
                <ul class="list-reset footer__list">
                    <li class="footer__item">Follow us</li>
                    <li class="footer__item"><a href="#" class="link nav__link footer__link">Instagram</a></li>
                    <li class="footer__item"><a href="#" class="link nav__link footer__link">Facebook</a></li>
                    <li class="footer__item"><a href="#" class="link nav__link footer__link">WhatsApp</a></li>
                </ul>
            </div>
            <div class="footer__section footer__section_down">
                <small>All right reserved. &copy; 2023</small>
            </div>

        </div>
    </footer>
</body>

</html>