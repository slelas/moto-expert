<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/dist/main.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900" rel="stylesheet">
        <title>Moto Expert</title>
        <script src="/scripts/jquery-3.3.1.min.js"></script>
        <script src="/scripts/script.js"></script>
    </head>
    <body>
        <cms:embed 'nav.php' />
        <section class="samozanav">
            <section class="redirect redirect--desktop clearfix">
                <div class="redirect__main-info-container clearfix">
                    <img class="redirect__main-info-image" src="/images/motor/svi-motori.png">
                    <div class="redirect__main-info">
                        <h2>Nudimo najbolja motorna vozila za svaki ukus vozača!</h2>
                        <p>Lorem Khaled Ipsum is a major key to success. Look at the sunset, life is amazing, life is beautiful, life is what you make it. It’s important to use cocoa butter.</p>
                    </div>
                </div>
                <div class="redirect__side-info-container">
                    <a class="redirect__side-info" href="<cms:link 'rabljeno.php' />">
                        <img class="redirect__side-info-icon" src="/images/motor/rabljeni-motori.png">
                        <div class="redirect__side-info-label">Rabljena vozila</div>
                        <img class="redirect__side-info-arrow" src="/images/arrow-v2.png">
                    </a>
                    <a class="redirect__side-info" href="<cms:link 'novo.php' />">
                        <img class="redirect__side-info-icon" src="/images/motor/novi-motori.png">
                        <div class="redirect__side-info-label">Nova vozila</div>
                        <img class="redirect__side-info-arrow" src="/images/arrow-v2.png">
                    </a>
                    <a class="redirect__side-info" href="<cms:link 'u-dolasku.php' />">
                        <img class="redirect__side-info-icon" src="/images/motor/u-dolasku.png">
                        <div class="redirect__side-info-label">U dolasku</div>
                        <img class="redirect__side-info-arrow" src="/images/arrow-v2.png">
                    </a>
                </div>
            </section>
        </section>
        <section class="redirect redirect--mobile clearfix">
            <div class="redirect__main-info-container clearfix">
                <img class="redirect__main-info-image" src="/images/motor/svi-motori.png">
                <div class="redirect__main-info">
                    <h2>Nudimo najbolja motorna vozila za svaki ukus vozača!</h2>
                    <p>Lorem Khaled Ipsum is a major key to success. Look at the sunset, life is amazing, life is beautiful, life is what you make it. It’s important to use cocoa butter.</p>
                </div>
            </div>
            <div class="redirect__side-info-container">
                <a class="redirect__side-info" href="<cms:link 'rabljeno.php' />">
                    <img class="redirect__side-info-icon" src="/images/motor/rabljeni-motori.png">
                    <div class="redirect__side-info-label">Rabljena vozila</div>
                    <img class="redirect__side-info-arrow" src="/images/arrow-v2.png">
                </a>
                <a class="redirect__side-info" href="<cms:link 'novo.php' />">
                    <img class="redirect__side-info-icon" src="/images/motor/novi-motori.png">
                    <div class="redirect__side-info-label">Nova vozila</div>
                    <img class="redirect__side-info-arrow" src="/images/arrow-v2.png">
                </a>
                <a class="redirect__side-info" href="<cms:link 'u-dolasku.php' />">
                    <img class="redirect__side-info-icon" src="/images/motor/u-dolasku.png">
                    <div class="redirect__side-info-label">U dolasku</div>
                    <img class="redirect__side-info-arrow" src="/images/arrow-v2.png">
                </a>
            </div>
        </section>
        <section class="process-section clearfix">
            <div class="process-section__text-wrapper">
                <h2>Jednostavno, brzo i sigurno preuzmi svoj novi motor</h2>
                <p>Na brz i jednostavan način Vam nudimo kupnju motora. Pogledajte ponudu vozila, odaberite vozilo koje Vam se sviđa, odaberite termin za testnu vožnju, procjenite je li pravi za Vas te ga povedite kući.</p>
            </div>
            <div class="processes">
                <div class="process">
                    <img class="process__icon" src="/images/motor/oval-1.png">
                    <span>Odaberite motor koji Vam se sviđa</span>
                </div>
                <div class="process">
                    <img class="process__icon" src="/images/motor/oval-2.png">
                    <span>Isprobajte motor kroz test vožnju</span>
                </div>
                <div class="process">
                    <img class="process__icon" src="/images/motor/oval-3.png">
                    <span>Pregledajte motor i njegove prednosti</span>
                </div>
                <div class="process">
                    <img class="process__icon" src="/images/motor/oval-4.png">
                    <span>Potpišite dokumente i uživajte u vožnji</span>
                </div>
            </div>
        </section>
        <section class="why">
            <div class="why__container">
                <h2 class="why__title">Naša misija je osigurati najbolja motorna vozila...</h2>
                <div class="why__card-container">
                    <div class="why__card clearfix">
                        <img src="/images/motor/why-1.png">
                        <div class="why__card-wrapper">
                            <h3>Brzo</h3>
                            <p>Vozilo je spremno za vožnju sa probnim registarskim pločicama u samo dva sata.</p>
                        </div>
                    </div>
                    <div class="why__card clearfix">
                        <img src="/images/motor/why-2.png">
                        <div class="why__card-wrapper">
                            <h3>Sigurno</h3>
                            <p>Sva vozila su sa provjerenog EU tržišta, uz to imate mogućnost garancije od jedne godine.</p>
                        </div>
                    </div>
                    <div class="why__card clearfix">
                        <img src="/images/motor/why-3.png">
                        <div class="why__card-wrapper">
                            <h3>Profesionalno</h3>
                            <p>Lorem Khaled Ipsum is a major key to success. Look at the sunset.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="customers clearfix">
            <div class="customers__container customers__container--mobile">
                <h3>Naša najbolja reklama su naši zadovoljni kupci</h3>
                <p>S ciljem uvoza najkvalitetnijih motornih vozila, u proteklih 2 godine iskustva, vidjeli smo preko 50 nasmijanih lica vlasnika vozila kupljenih kod nas.</p>
            </div>
            <div class="customers__slider">
                <a class="arrow-button" onclick="plusDivs(-1)"></a>
                <div class="customer__card">
                    <div class="card__info-container">
                        <div class="card__model">HONDA CBR</div>
                        <div class="card__stars">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                        </div>
                        <div class="card__quote">“Odlična ponuda rabljenih motocikala!“</div>
                        <div class="card__person">T. Vitaljić</div>
                    </div>
                </div>
                <div class="customer__card">
                    <div class="card__info-container">
                        <div class="card__model">HONDA CBR</div>
                        <div class="card__stars">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                        </div>
                        <div class="card__quote">“Nakon par tjedana od kupovine crnog "malog" Stroma, ne mogu ništa drugo reć nego da sa sam jako zadovoljan. Toplo preporučam.“</div>
                        <div class="card__person">D. Jadrešić</div>
                    </div>
                </div>
                <div class="customer__card">
                    <div class="card__info-container">
                        <div class="card__model">HONDA CBR</div>
                        <div class="card__stars">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                        </div>
                        <div class="card__quote">“Odlični rabljeni motori po ok cijeni.“</div>
                        <div class="card__person">S. Perko</div>
                    </div>
                </div>
                <div class="customer__card">
                    <div class="card__info-container">
                        <div class="card__model">HONDA CBR</div>
                        <div class="card__stars">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                        </div>
                        <div class="card__quote">“Motor je super. Odlično stanje motora, očišćen, servisiran - pali i vozi. Bez greške, dobra cijena, vrhunska usluga i ljubaznost. Nakon 8000 km i više od godinu dana vožnje, motor je i dalje perfektan.“</div>
                        <div class="card__person">G. Radetić</div>
                    </div>
                </div>
                <div class="customer__card">
                    <div class="card__info-container">
                        <div class="card__model">HONDA CBR</div>
                        <div class="card__stars">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                            <img class="card__star" src="/images/star.png">
                        </div>
                        <div class="card__quote">“Odlična usluga i još bolji motori.“</div>
                        <div class="card__person">R. Babo</div>
                    </div>
                </div>
                <a class="arrow-button arrow-button--orientation-right" onclick="plusDivs(+1)"></a>
            </div>
            <a class="customer__redirect customer__redirect--mobile clearfix" href="<cms:link 'ponuda-motora.php' />">
                <img class="customer__redirect-icon" src="/images/customer-redirect.png">
                <div class="customer__redirect-text">
                    <div class="customer__redirect-top">Želite i vi postati zadovoljni kupac?</div>
                    <div class="customer__redirect-bottom">Provjerite motore u ponudi <img src="/images/arrow-v3.png" /></div>
                </div>
            </a>
            <div class="customers__wrapper">
                <div class="customers__container customers__container--desktop">
                    <h3>Naša najbolja reklama su naši zadovoljni kupci</h3>
                    <p>S ciljem uvoza najkvalitetnijih motornih vozila, u proteklih 2 godine iskustva, vidjeli smo preko 50 nasmijanih lica vlasnika vozila kupljenih kod nas.</p>
                    <a class="customer__redirect customer__redirect--desktop clearfix" href="<cms:link 'ponuda-motora.php' />">
                        <img class="customer__redirect-icon" src="/images/customer-redirect.png">
                        <div class="customer__redirect-text">
                            <div class="customer__redirect-top">Želite i vi postati zadovoljni kupac?</div>
                            <div class="customer__redirect-bottom">Provjerite motore u ponudi <img src="/images/arrow-v3.png" /></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="customers__bottom-wrapper">
                <div class="njuskalo">
                    <h3 class="njuskalo__title">Posjetite Njuškalo trgovinu</h3>
                    <p class="njuskalo__desc">Osim naše web stranice posjetite nas i na Njuškalu. Pogledajte naša vozila i na najvećoj hrvatskoj mreži rabljenih vozila.</p>
                    <a class="njuskalo__link" target="_blank" href="https://www.njuskalo.hr/trgovina/motoexpert">njuskalo.hr <img src="/images/arrow-white.png"></a>
                    <img class="njuskalo__img" src="/images/njuskalo/njuskalo.png">
                </div>
                <div class="nacini-placanja">
                    <h3 class="nacini-placanja__title">Kartično plaćanje</h3>
                    <p class="nacini-placanja__desc">Prihvaćamo više vrsta načina plaćanja. Motorno vozilo možete platiti karticom Vise i American Expressa ili gotovinom.</p>
                    <a class="nacini-placanja__link" href="https://www.splitskabanka.hr/gradani/kartice/kartice-s-odgodom-placanja/visa-classic-gold" target="_blank">Visa <img src="/images/arrow-white.png"></a>
                    <a class="nacini-placanja__link" href="https://www.americanexpress.com/hr/network/benefit/potrosacki-kredit-offer.html" target="_blank">American Express <img src="/images/arrow-white.png"></a>
                    <img class="nacini-placanja__img" src="/images/nacini-placanja.svg">
                </div>
            </div>
        </section>
        <cms:embed 'footer.php' />
    </body>
</html>
<?php COUCH::invoke(); ?>