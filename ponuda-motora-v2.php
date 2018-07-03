<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/dist/main.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900" rel="stylesheet">
        <title>Ponuda motora | Moto Expert</title>
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
                    <a href="../ponuda-motora.php"><li class="navigation__item">Ponuda motora</li></a>
                    <a href="#"><li class="navigation__item">Način plaćanja</li></a>
                </ul>
            </div>
        </nav>
        <header class="motor-list__header">
            <h1 class="motor-list__header-title">Super veliki naslov o predobrim motorima</h1>
            <h3 class="motor-list__header-desc">Lorem Khaled Ipsum is a major key to success. Look at the sunset, life is amazing, life is beautiful, life is what you make it.</h3>
        </header>
        <div class="motor-list__filters">
            <a href="#" class="motor-list__filter">
                <img src="">
                <span>SVI MOTOCIKLI</span>
                <div class="motor-list__filter-indicator"></div>
            </a>
            <a href="#" class="motor-list__filter">
                <img src="">
                <span>SVI MOTOCIKLI</span>
                <div class="motor-list__filter-indicator"></div>
            </a>
            <a href="#" class="motor-list__filter">
                <img src="">
                <span>SVI MOTOCIKLI</span>
                <div class="motor-list__filter-indicator"></div>
            </a>
            <a href="#" class="motor-list__filter">
                <img src="">
                <span>SVI MOTOCIKLI</span>
                <div class="motor-list__filter-indicator"></div>
            </a>
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