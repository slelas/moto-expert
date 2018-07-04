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
        <cms:embed 'nav.php' />
        <header class="motor-list__header">
            <h1 class="motor-list__header-title">Super veliki naslov o predobrim motorima</h1>
            <h3 class="motor-list__header-desc">Lorem Khaled Ipsum is a major key to success. Look at the sunset, life is amazing, life is beautiful, life is what you make it.</h3>
        </header>
        <div class="motor-list__filters-collapsible" id="motor-list">
            <input id="collapsible" class="toggle" type="checkbox">
            <label for="collapsible" class="lbl-toggle">VRSTA VOZILA <div class="arrow-circle"><img src="/images/arrow.png"></div></label>
            <div class="motor-list__filters">
                <a href="<cms:link 'ponuda-motora.php' />" class="motor-list__filter">
                    <div class="motor-list__filter-imgs">
                        <img class="motor-list__filter-img" src="/images/circle.svg">
                        <img class="motor-list__filter-img" src="/images/circle.svg">
                        <img class="motor-list__filter-img" src="/images/circle.svg">
                    </div>
                    <span class="motor-list__filter-title">SVI MOTOCIKLI</span>
                    <div class="motor-list__filter-indicator"></div>
                </a>
                <a href="<cms:link 'rabljeno.php' />" class="motor-list__filter">
                    <div class="motor-list__filter-imgs">
                        <img class="motor-list__filter-img" src="/images/circle.svg">
                        <img class="motor-list__filter-img" src="/images/circle.svg">
                    </div>
                    <span class="motor-list__filter-title">RABLJENI MOTOCIKLI</span>
                </a>
                <a href="<cms:link 'novo.php' />" class="motor-list__filter">
                    <div class="motor-list__filter-imgs">
                        <img class="motor-list__filter-img" src="/images/circle.svg">
                    </div>
                    <span class="motor-list__filter-title">NOVI MOTOCIKLI</span>
                </a>
                <a href="<cms:link 'u-dolasku.php' />" class="motor-list__filter">
                    <div class="motor-list__filter-imgs">
                        <img class="motor-list__filter-img" src="/images/circle.svg">
                    </div>
                    <span class="motor-list__filter-title">U DOLASKU</span>
                </a>
            </div>
        </div>
        <section class="motor-list">
            <h2 class="motor-list__main-title">Lista vozila</h3>
            <cms:pages masterpage='motor.php' limit='2' paginate='1'>
                <a href="<cms:show k_page_link />" class="motor-list__card clearfix">
                    <div class="card__image" style='background-image: url("<cms:show motor_slika />");'></div>
                    <div class="card__main-info-container">
                        <div class="card__main-info clearfix">
                            <div class="card__main-info-left">
                                <div class="card__category"><cms:show k_page_foldertitle /> VOZILO</div>
                                <div class="card__title"><cms:show k_page_title /></div>
                                <div class="card__date"><b>Objavljeno:</b> <cms:date k_page_date format='d.m.Y.' /></div>
                            </div>
                            <div class="card__main-info-right">
                                <div class="card__price-hrk"><cms:number_format cijena_motora thousands_separator='.' decimal_precision='0' /> HRK</div>
                                <div class="card__price-eur">~<cms:number_format "<cms:mul cijena_motora '0.135' />" thousands_separator='.' decimal_precision='0' /> €</div>
                            </div>
                        </div>
                        <div class="card__specifications">
                            <div class="card__specification">
                                <div class="card__specification-icon">
                                    <img src="/images/motor/stanje.png" alt="Stanje motora ikonica">
                                </div>
                                <div class="card__specification-text">
                                    <span class="specification-text__category">SNAGA</span>
                                    <span class="specification-text__info"><cms:show snaga_motora /> kW</span>
                                </div>
                            </div>
                            <div class="card__specification">
                                <div class="card__specification-icon">
                                    <img src="/images/motor/kilometri.png" alt="Stanje motora ikonica">
                                </div>
                                <div class="card__specification-text">
                                    <span class="specification-text__category">KILOMETRI</span>
                                    <span class="specification-text__info"><cms:show kilometri /> km</span>
                                </div>
                            </div>
                            <div class="card__specification">
                                <div class="card__specification-icon">
                                    <img src="/images/motor/obujam-motora.png" alt="Stanje motora ikonica">
                                </div>
                                <div class="card__specification-text">
                                    <span class="specification-text__category">OBUJAM MOTORA</span>
                                    <span class="specification-text__info"><cms:show obujam_motora /> cm3</span>
                                </div>
                            </div>
                            <div class="card__specification">
                                <div class="card__specification-icon">
                                    <img src="/images/motor/prva-registracija.png" alt="Stanje motora ikonica">
                                </div>
                                <div class="card__specification-text">
                                    <span class="specification-text__category">PRVA REGISTRACIJA</span>
                                    <span class="specification-text__info"><cms:show registracija /></span>
                                </div>
                            </div>
                        </div>
                        <div class="card__main-info-right card__main-info-right--desktop">
                            <div class="card__price-tag">CIJENA</div>
                            <div class="card__price-hrk"><cms:number_format cijena_motora thousands_separator='.' decimal_precision='0' /> HRK</div>
                            <div class="card__price-eur">~<cms:number_format "<cms:mul cijena_motora '0.135' />" thousands_separator='.' decimal_precision='0' /> €</div>
                        </div>
                    </div>
                </a>
                <cms:if k_paginated_bottom >
                    <cms:if k_paginate_link_prev >
                        <a href="<cms:show k_paginate_link_prev />#motor-list">prev</a>
                    </cms:if>
                    <cms:if k_paginator_required >
                        Page <cms:show k_current_page /> of <cms:show k_total_pages /><br>
                    </cms:if>
                    <cms:if k_paginate_link_next >
                        <a href="<cms:show k_paginate_link_next />#motor-list">next</a>
                    </cms:if>
                </cms:if>
            </cms:pages>
        </section>
        <cms:embed 'footer.php' />
    </body>
</html>
<?php COUCH::invoke(); ?>