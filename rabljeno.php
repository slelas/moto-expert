<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/dist/main.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900" rel="stylesheet">
        <title>Novi motori | Moto Expert</title>
    </head>
    <body>
        <nav class="navigation">
            <div class="navigation__container clearfix">
                <img class="navigation__logo" src="/images/moto-expert-logo.svg" alt="Moto Expert logo">
                <a class="navigation__button" href="#">
                    <img class="button__icon" src="/images/send-message-icon.svg" alt="Send message icon">
                    <span class="button__text">Kontaktiraj nas</span>
                </a>
                <ul class="navigation__items">
                    <a href="#"><li class="navigation__item">Naslovnica</li></a>
                    <a href="<cms:link 'ponuda-motora.php' />"><li class="navigation__item">Ponuda motora</li></a>
                    <a href="#"><li class="navigation__item">Način plaćanja</li></a>
                </ul>
            </div>
        </nav>
        <header class="motor-list__header">
            <div class="motor-list__header-container">
                <h1 class="header__title">Lorem ipsum dolor sit amet</h1>
                <h2 class="header__subtitle">Lorem Khaled Ipsum is a major key to success. Look at the sunset, life is amazing, life is beautiful, life is what you make it. It’s important to use cocoa butter.</h2>
                <div class="header__filters">
                    <cms:folders masterpage='motor.php' >
                        <div class="header__filter">
                            <img src="/images/circle.svg">
                            <span>SVI MOTOCIKLI</span>
                        </div>
                        <div class="header__filter">
                            <img src="/images/circle.svg">
                            <span>RABLJENI MOTOCIKLI</span>
                        </div>
                        <div class="header__filter">
                            <img src="/images/circle.svg">
                            <span>NOVI MOTOCIKLI</span>
                            <a href="<cms:show k_folder_link />"><cms:show k_folder_title /></a>
                        </div>
                        <div class="header__filter">
                            <img src="/images/circle.svg">
                            <span>U DOLASKU</span>
                        </div>
                    </cms:folders>
                </div>
            </div>
        </header>
        <div class="motor-list">
            <h2 class="motor-list__title">Lista motora</h2>
            <cms:pages masterpage='motor.php' folder='rabljeno'>
                <a class="motor-list__card" href="<cms:show k_page_link />">
                    <div class="card__image" style='background-image: url("<cms:show motor_slika />");'></div>
                    <div class="card__container">
                        <div class="card__main-info">
                            <span class="card__main-info__category <cms:if k_page_foldertitle=='U DOLASKU'>orange</cms:if>
                            <cms:if k_page_foldertitle=='NOVO'>green</cms:if>"><cms:show k_page_foldertitle /></span>
                            <h3><cms:show k_page_title /></h3>
                            <span class="publish-date"><b>Objavljeno:</b> <cms:date k_page_date format='d.m.Y.' /></span>
                        </div>
                        <div class="card__specifications">
                            <div class="card__specification">
                                <img src="/images/circle.svg">
                                <div class="vehicle__specification-text">
                                    <span class="specification-text__category">VLASNIK</span>
                                    <span class="specification-text__info"><cms:show vlasnik /></span>
                                </div>
                            </div>
                            <div class="card__specification">
                                <img src="/images/circle.svg">
                                <div class="vehicle__specification-text">
                                    <span class="specification-text__category">VLASNIK</span>
                                    <span class="specification-text__info">1. vlasnik</span>
                                </div>
                            </div>
                            <div class="card__specification">
                                <img src="/images/circle.svg">
                                <div class="vehicle__specification-text">
                                    <span class="specification-text__category">VLASNIK</span>
                                    <span class="specification-text__info">1. vlasnik</span>
                                </div>
                            </div>
                            <div class="card__specification">
                                <img src="/images/circle.svg">
                                <div class="vehicle__specification-text">
                                    <span class="specification-text__category">VLASNIK</span>
                                    <span class="specification-text__info">1. vlasnik</span>
                                </div>
                            </div>
                        </div>
                        <div class="card__price-info">
                            <span class="card__price">CIJENA</span>
                            <span class="card__price-hrk">39.450 HRK</span>
                            <span class="card__price-eur">4.300 €</span>
                        </div>
                    </div>
                </a>
            </cms:pages>
        </div>
        <footer class="footer">
            <div class="footer__container clearfix">
                <div class="footer__company-info">
                    <img src="/images/moto-expert-logo.svg">
                    <div class="company-info__container">
                        <span>Moto Expert d.o.o.</span>
                        <p>OIB: 50235560247; MB: 04654293</p>
                        <p>Žiro račun: 2360000 – 1102192162 kod Zagrebačke banke d.d.</p>
                    </div>
                </div>
                <div class="footer__contact">
                    <span>Kontaktirajte nas</span>
                    <span>+385 98 299 055</span>
                    <span>info@motoexpert.hr</span>
                    <img src="/images/circle.svg" alt="">
                    <img src="/images/circle.svg" alt="">
                </div>
                <ul class="footer__navigation">
                    <li>Naslovnica</li>
                    <li>Ponuda motora</li>
                    <li>Način plaćanja</li>
                </ul>
            </div>
            <div class="footer__signature">
                <span class="footer__fire">Made with 🔥</span>
                <span class="footer__fuel">FUEL AGENCY</span>
            </div>
        </footer>
    </body>
</html>
<?php COUCH::invoke(); ?>