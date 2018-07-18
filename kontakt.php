<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/dist/main.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900" rel="stylesheet">
        <title>Kontakt — Moto Expert</title>
        <script src="/scripts/jquery-3.3.1.min.js"></script>
        <script src="/scripts/script.js"></script>
    </head>
    <body>
        <cms:embed 'nav.php' />
        <header class="contact__header"></header>
        <div class="contact__container">
            <div class="contact__forms">
                <div class="contact__card contact__card--screen-mobile">
                    <div class="contact__card-header">KONTAKT INFORMACIJE</div>
                    <div class="contact__card-bottom">
                        <p>Imate pitanje, treba Vam opširniji odgovor? <b>Javite nam se.</b></p>
                        <div class="contact__card-telephone">
                            <img src="/images/iconmonstr-phone-1-24.png">
                            <span>+385 91 132 3213</span>
                        </div>
                        <div class="contact__card-mail">
                            <img src="/images/iconmonstr-email-2-24.png">
                            <span>motoexpert.hr@gmail.com</span>
                        </div>
                        <div class="question-mark">?</div>
                        <div class="question-mark">?</div>
                        <div class="question-mark">?</div>
                        <div class="question-mark">?</div>
                    </div>
                </div>
                <h3 class="contact-forms__title">Pošaljite nam e-mail</h3>
                <p class="contact-forms__desc">Lorem Khaled Ipsum is a major key to success. The key to success is to keep your head above the water, never give up. You smart, you loyal, you a genius. It’s on you how you want to live your life.</p>
                <form action="">
                    <h4>Razlog kontakta</h4>
                    <cms:input type="radio" name="size" opt_values="Small=small | Medium=medium | Large=large | Huge=huge" /><br />
                    Ime i prezime: <cms:input type="text" name="ime-prezime" /><br />
                    <textarea name="contact-message" id="" cols="30" rows="10"></textarea>
                </form>
            </div>
            <div class="contact__card contact__card--screen-desktop">
                <div class="contact__card-header">KONTAKT INFORMACIJE</div>
                <div class="contact__card-bottom">
                    <p>Imate pitanje, treba Vam opširniji odgovor? <b>Javite nam se.</b></p>
                    <div class="contact__card-telephone">
                        <img src="/images/iconmonstr-phone-1-24.png">
                        <span>+385 91 132 3213</span>
                    </div>
                    <div class="contact__card-mail">
                        <img src="/images/iconmonstr-email-2-24.png">
                        <span>motoexpert.hr@gmail.com</span>
                    </div>
                    <div class="question-mark">?</div>
                    <div class="question-mark">?</div>
                    <div class="question-mark">?</div>
                    <div class="question-mark">?</div>
                </div>
            </div>
        </div>
        <cms:embed 'footer.php' />
    </body>
</html>
<?php COUCH::invoke(); ?>