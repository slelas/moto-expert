<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Motori' clonable='1'>
    <cms:editable name='motor_slika' type='image' />
    <cms:folder name="novo" title="Novo" />
    <cms:folder name="rabljeno" title="Rabljeno" />
    <cms:folder name="u_dolasku" title="U dolasku" />
    <cms:repeatable name='kurac' label='kurac'>
        <cms:editable name='kurcina' type='text' />
    </cms:repeatable>
    <cms:editable
        name='snaga_motora'
        label='Snaga motora'
        desc='u kW'
        type='text'>
    </cms:editable>
    <cms:editable
        name='boja_motora'
        label='Boja motora'
        type='text'>
    </cms:editable>
    <cms:editable
        name='model_motora'
        label='Model motora'
        desc='u kW'
        type='text'>
    </cms:editable>
    <cms:editable
        name='obujam_motora'
        label='Obujam motora'
        desc='u cm3'
        type='text'>
    </cms:editable>
    <cms:editable
        name='vlasnik'
        label='Broj vlasnika motora'
        desc='1. vlasnik, 2. vlasnik...'
        type='text'>
    </cms:editable>
    <cms:editable
        name='vrsta_motora'
        label='Vrsta motora'
        desc='npr. dvotaktni ili četverotaktni'
        type='text'>
    </cms:editable>
    <cms:editable
        name='kilometri'
        label='Broj kilometara'
        desc='pisati bez km na kraju'
        type='text'>
    </cms:editable>
    <cms:editable
        name='registracija'
        label='Prva registracija'
        desc='2008.'
        type='text'>
    </cms:editable>
    <cms:editable 
        type='reverse_relation' 
        name='motor_images'
        masterpage='gallery.php' 
        field='motor_image' 
        anchor_text='View images' 
        label='Gallery'
    />
    <cms:editable
        name="prva_specifikacija"
        label="Prva istaknuta specifikacija" desc=""
        opt_values='Snaga | Boja | Obujam motora | Vlasnik | Vrsta motora | Kilometri | Prva registracija'
        type='radio'
    />
    <cms:editable
        name="druga_specifikacija"
        label="Druga istaknuta specifikacija" desc=""
        opt_values='Snaga | Boja | Obujam motora | Vlasnik | Vrsta motora | Kilometri | Prva registracija'
        type='radio'
    />
    <cms:editable
        name="treca_specifikacija"
        label="Treća istaknuta specifikacija" desc="Odaberite 3 istaknute specifikacije vozila"
        opt_values='Snaga | Boja | Obujam motora | Vlasnik | Vrsta motora | Kilometri | Prva registracija'
        type='radio'
    />
</cms:template>

<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/dist/main.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900" rel="stylesheet">
        <title><cms:show k_page_title /> - Moto Expert</title>
    </head>
    <body>
        <nav class="navigation">
            <div class="navigation__container clearfix">
                <input type="checkbox" id="menu-toggle"/>
                <label for="menu-toggle" class="hamburger-container">
                    <img class="hamburger" src="/images/menu.png">
                </label>
                <label for="menu-toggle" class="cross-container">
                    <img class="cross" src="/images/cross.png">
                </label>
                <img class="navigation__logo" src="/images/moto-expert-logo.svg" alt="Moto Expert logo">
                <a class="navigation__button" href="#">
                    <img class="button__icon" src="/images/send-message-icon.svg" alt="Send message icon">
                    <span class="button__text">Kontaktirajte nas</span>
                </a>
                <ul class="navigation__items">
                    <a href="#"><li class="navigation__item">Naslovnica</li></a>
                    <a href="<cms:link 'ponuda-motora.php' />"><li class="navigation__item">Ponuda motora</li></a>
                    <a href="#"><li class="navigation__item">Način plaćanja</li></a>
                </ul>
            </div>
        </nav>
        <header class="header" style='background-image: url("<cms:show motor_slika />");'></header>
        <div class="vehicle">
            <div class="vehicle__header-container clearfix">
                <div class="vehicle__main-info clearfix">
                    <div class="main-info__text">
                        <span class="vehicle-type"><cms:show k_page_foldertitle /></span>
                        <h1 class="vehicle-model"><cms:show k_page_title /></h1>
                        <span class="vehicle-publish"><b>Objavljeno:</b> <cms:date k_page_date format='d.m.Y.' /></span>
                    </div>
                    <div class="main-info__characteristics">
                        <div class="main-info__characteristic">
                            <cms:if prva_specifikacija = 'Snaga' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/snaga.png">
                                </div>
                                <span>SNAGA</span>
                                <h2><cms:show snaga_motora /> kW</h2>
                            </cms:if>
                            <cms:if prva_specifikacija = 'Boja' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/boja.png">
                                </div>
                                <span>BOJA</span>
                                <h2><cms:show boja_motora /></h2>
                            </cms:if>
                            <cms:if prva_specifikacija = 'Obujam motora' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/obujam-motora.png">
                                </div>
                                <span>OBUJAM MOTORA</span>
                                <h2><cms:show obujam_motora /> cm3</h2>
                            </cms:if>
                            <cms:if prva_specifikacija = 'Vlasnik' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/vlasnik.png">
                                </div>
                                <span>VLASNIK</span>
                                <h2><cms:show vlasnik /></h2>
                            </cms:if>
                            <cms:if prva_specifikacija = 'Vrsta motora' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/vrsta-motora.png">
                                </div>
                                <span>VRSTA MOTORA</span>
                                <h2><cms:show vrsta_motora /></h2>
                            </cms:if>
                            <cms:if prva_specifikacija = 'Kilometri' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/kilometri.png">
                                </div>
                                <span>KILOMETRI</span>
                                <h2><cms:show kilometri /> km</h2>
                            </cms:if>
                            <cms:if prva_specifikacija = 'Prva registracija' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/prva-registracija.png">
                                </div>
                                <span>PRVA REGISTRACIJA</span>
                                <h2><cms:show registracija /></h2>
                            </cms:if>
                        </div>
                        <div class="main-info__characteristic">
                            <cms:if druga_specifikacija = 'Snaga' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/snaga.png">
                                </div>
                                <span>SNAGA</span>
                                <h2><cms:show snaga_motora /> kW</h2>
                            </cms:if>
                            <cms:if druga_specifikacija = 'Boja' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/boja.png">
                                </div>
                                <span>BOJA</span>
                                <h2><cms:show boja_motora /></h2>
                            </cms:if>
                            <cms:if druga_specifikacija = 'Obujam motora' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/obujam-motora.png">
                                </div>
                                <span>OBUJAM MOTORA</span>
                                <h2><cms:show obujam_motora /> cm3</h2>
                            </cms:if>
                            <cms:if druga_specifikacija = 'Vlasnik' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/vlasnik.png">
                                </div>
                                <span>VLASNIK</span>
                                <h2><cms:show vlasnik /></h2>
                            </cms:if>
                            <cms:if druga_specifikacija = 'Vrsta motora' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/vrsta-motora.png">
                                </div>
                                <span>VRSTA MOTORA</span>
                                <h2><cms:show vrsta_motora /></h2>
                            </cms:if>
                            <cms:if druga_specifikacija = 'Kilometri' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/kilometri.png">
                                </div>
                                <span>KILOMETRI</span>
                                <h2><cms:show kilometri /> km</h2>
                            </cms:if>
                            <cms:if druga_specifikacija = 'Prva registracija' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/prva-registracija.png">
                                </div>
                                <span>PRVA REGISTRACIJA</span>
                                <h2><cms:show registracija /></h2>
                            </cms:if>
                        </div>
                        <div class="main-info__characteristic">
                            <cms:if treca_specifikacija = 'Snaga' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/snaga.png">
                                </div>
                                <span>SNAGA</span>
                                <h2><cms:show snaga_motora /> kW</h2>
                            </cms:if>
                            <cms:if treca_specifikacija = 'Boja' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/boja.png">
                                </div>
                                <span>BOJA</span>
                                <h2><cms:show boja_motora /></h2>
                            </cms:if>
                            <cms:if treca_specifikacija = 'Obujam motora' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/obujam-motora.png">
                                </div>
                                <span>OBUJAM MOTORA</span>
                                <h2><cms:show obujam_motora /> cm3</h2>
                            </cms:if>
                            <cms:if treca_specifikacija = 'Vlasnik' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/vlasnik.png">
                                </div>
                                <span>VLASNIK</span>
                                <h2><cms:show vlasnik /></h2>
                            </cms:if>
                            <cms:if treca_specifikacija = 'Vrsta motora' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/vrsta-motora.png">
                                </div>
                                <span>VRSTA MOTORA</span>
                                <h2><cms:show vrsta_motora /></h2>
                            </cms:if>
                            <cms:if treca_specifikacija = 'Kilometri' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/kilometri.png">
                                </div>
                                <span>KILOMETRI</span>
                                <h2><cms:show kilometri /> km</h2>
                            </cms:if>
                            <cms:if treca_specifikacija = 'Prva registracija' >
                                <div class="main-info__characteristic-img">
                                    <img src="/images/motor/prva-registracija.png">
                                </div>
                                <span>PRVA REGISTRACIJA</span>
                                <h2><cms:show registracija /></h2>
                            </cms:if>
                        </div>
                    </div>
                </div>
                <div class="vehicle__price-contact">
                    <div class="vehicle__price-container">
                        <div>
                            <span>CIJENA</span>
                            <h3>39.450 HRK</h3>
                            <span>4.300 €</span>
                        </div>
                        <div class="eur">€</div>
                        <div class="eur">€</div>
                        <div class="eur">€</div>
                        <div class="eur">€</div>
                        <div class="eur">€</div>
                    </div>
                    <div class="vehicle__contact-container">
                        <div class="vehicle__contact-oval">
                            <img src="/images/motor/oval-3@3x.png">
                            <img src="/images/motor/shape_4@3x.png">
                        </div>
                        <div class="vehicle__contact">
                            <span>Želiš kupiti ovaj motor?</span>
                            <a href="#">Javi nam se</a>
                            <img src="/images/motor/icon-send@3x.png" alt="Send message icon">
                        </div>
                        <img class="motor-price-icon" src="/images/motor/shape_4@3x.png">
                        <img class="motor-price-icon" src="/images/motor/shape_4@3x.png">
                        <img class="motor-price-icon" src="/images/motor/shape_4@3x.png">
                        <img class="motor-price-icon" src="/images/motor/shape_4@3x.png">
                    </div>
                </div>
            </div>
            <div class="vehicle__specifications-section">
                <h3>Specifikacije vozila</h3>
                <div class="vehicle__specifications">
                    <div class="vehicle__specification">
                        <div class="vehicle__specification-container">
                            <img src="/images/motor/stanje.png" alt="Stanje motora ikonica">
                        </div>
                        <div class="vehicle__specification-text">
                            <span class="specification-text__category">STANJE</span>
                            <span class="specification-text__info"><cms:show k_page_foldertitle /></span>
                        </div>
                    </div>
                    <div class="vehicle__specification">
                        <div class="vehicle__specification-container">
                            <img src="/images/motor/snaga.png" alt="Snaga motora ikonica">
                        </div>
                        <div class="vehicle__specification-text">
                            <span class="specification-text__category">SNAGA</span>
                            <span class="specification-text__info"><cms:show snaga_motora /> kW</span>
                        </div>
                    </div>
                    <div class="vehicle__specification">
                        <div class="vehicle__specification-container">
                            <img src="/images/motor/boja.png" alt="Boja motora ikonica">
                        </div>
                        <div class="vehicle__specification-text">
                            <span class="specification-text__category">BOJA</span>
                            <span class="specification-text__info"><cms:show boja_motora /></span>
                        </div>
                    </div>
                    <div class="vehicle__specification">
                        <div class="vehicle__specification-container">
                            <img src="/images/motor/model.png" alt="Model motora ikonica">
                        </div>
                        <div class="vehicle__specification-text">
                            <span class="specification-text__category">MODEL</span>
                            <div class="specification-text__info"><cms:show model_motora /></div>
                        </div>
                    </div>
                    <div class="vehicle__specification">
                        <div class="vehicle__specification-container">
                            <img src="/images/motor/obujam-motora.png" alt="Obujam motora ikonica">
                        </div>
                        <div class="vehicle__specification-text">
                            <span class="specification-text__category">OBUJAM MOTORA</span>
                            <span class="specification-text__info"><cms:show obujam_motora /> cm3</span>
                        </div>
                    </div>
                    <div class="vehicle__specification">
                        <div class="vehicle__specification-container">
                            <img src="/images/motor/vlasnik.png" alt="Vlasnik motora ikonica">
                        </div>
                        <div class="vehicle__specification-text">
                            <span class="specification-text__category">VLASNIK</span>
                            <span class="specification-text__info"><cms:show vlasnik /></span>
                        </div>
                    </div>
                    <div class="vehicle__specification">
                        <div class="vehicle__specification-container">
                            <img src="/images/motor/vrsta-motora.png" alt="Vrsta motora ikonica">
                        </div>
                        <div class="vehicle__specification-text">
                            <span class="specification-text__category">VRSTA MOTORA</span>
                            <span class="specification-text__info"><cms:show vrsta_motora /></span>
                        </div>
                    </div>
                    <div class="vehicle__specification">
                        <div class="vehicle__specification-container">
                            <img src="/images/motor/kilometri.png" alt="Kilometri motora ikonica">
                        </div>
                        <div class="vehicle__specification-text">
                            <span class="specification-text__category">KILOMETRI</span>
                            <span class="specification-text__info"><cms:show kilometri /> km</span>
                        </div>
                    </div>
                    <div class="vehicle__specification">
                        <div class="vehicle__specification-container">
                            <img src="/images/motor/prva-registracija.png" alt="Prva registracija ikonica">
                        </div>
                        <div class="vehicle__specification-text">
                            <span class="specification-text__category">PRVA REGISTRACIJA</span>
                            <span class="specification-text__info"><cms:show registracija /></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vehicle__equipment-section">
                <h3>Dodatna oprema vozila</h3>
                <p>Lorem Khaled Ipsum is a major key to success. The key to success is to keep your head above the water, never give up. You smart, you loyal, you a genius. It’s on you how you want to live your life.</p>
                <cms:show_repeatable 'kurac' >
                    <div class="vehicle__equipment-card">
                        <span><cms:show kurcina /></span>
                        <img src="/images/like-icon.png" alt="">
                    </div>
                </cms:show_repeatable>
            </div>
            <div class="vehicle__equipment-section">
                <h3>Opis</h3>
                <p>Lorem Khaled Ipsum is a major key to success. Look at the sunset, life is amazing, life is beautiful, life is what you make it. We the best. Egg whites, turkey sausage, wheat toast, water. Of course they don’t want us to eat our breakfast, so we are going to enjoy our breakfast. You see the hedges, how I got it shaped up? It’s important to shape up your hedges, it’s like getting a haircut, stay fresh. Cloth talk. The first of the month is coming, we have to get money, we have no choice. It cost money to eat and they don’t want you to eat.</p>
            </div>
            <div class="vehicle__equipment-section">
                <h3>Fotografije</h3>
                <div class="mobile-flex">
                    <cms:reverse_related_pages 'motor_image' masterpage='gallery.php' >
                        <a class="vehicle__photo" target="_blank" href="<cms:show gg_image />" style='background-image: url("<cms:show gg_image />");'></a>
                    </cms:reverse_related_pages>
                </div>
            </div>
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
                    <img src="/images/facebook.svg" alt="">
                    <img src="/images/instagram.svg" alt="">
                </div>
                <ul class="footer__navigation">
                    <li>Naslovnica</li>
                    <li>Motori</li>
                    <li>Način plaćanja</li>
                    <li>Kontakt</li>
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