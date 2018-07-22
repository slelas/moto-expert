<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/dist/main.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900" rel="stylesheet">
        <title>Kontakt | Moto Expert</title>
        <script src="/scripts/jquery-3.3.1.min.js"></script>
        <script src="/scripts/script.js"></script>
        <script type="text/javascript" src="js/contact.js"></script>
    </head>
    <body>
        <cms:embed 'nav.php' />
        <header class="contact__header"></header>
        <div class="contact__container clearfix">
            <div class="contact__forms">
                <div class="contact__card contact__card--screen-mobile">
                    <div class="contact__card-header">KONTAKT INFORMACIJE</div>
                    <div class="contact__card-bottom">
                        <p>Imate pitanje, treba Vam opširniji odgovor? <b>Javite nam se.</b></p>
                        <div class="contact__card-telephone">
                            <img src="/images/iconmonstr-phone-1-24.png">
                            <span><cms:get_custom_field 'broj_telefona' masterpage='informacije.php' /></span>
                        </div>
                        <div class="contact__card-mail">
                            <img src="/images/iconmonstr-email-2-24.png">
                            <span><cms:get_custom_field 'email_tvrtke' masterpage='informacije.php' /></span>
                        </div>
                        <div class="question-mark">?</div>
                        <div class="question-mark">?</div>
                        <div class="question-mark">?</div>
                        <div class="question-mark">?</div>
                    </div>
                </div>
                <h3 class="contact-forms__title">Pošaljite nam e-mail</h3>
                <p class="contact-forms__desc">Imate pitanje, ne znate koji je motor za Vas? Slobodno nam se obratite, a mi ćemo Vas kontaktirati u najkraćem mogućem rokom i nastojati odgovoriti na Vaše upite.</p>
                <cms:form action='' method='post' id='contact'>
                    <div class="input--wrapper">
                        <div class="contact-forms__input-title">Ime i prezime</div>
                        <cms:input class='contact-forms__input' type='text' name='name' id='name' required='1' placeholder='Mate Matić' />
                        <cms:if k_error_name>
                            <span id='name_error' class='error' style="display: block; color: red;">Niste upisali ime i prezime</span>
                        </cms:if>
                    </div>
                    <div class="input--wrapper">
                        <div class="contact-forms__input-title">E-mail</div>
                        <cms:input class='contact-forms__input' type='text' name='email' id='email' required='1' validator='email' placeholder='mate@matić.hr' />
                        <cms:if k_error_email>
                            <span id='name_error' class='error' style="display: block; color: red;">Niste upisali e-mail</span>
                        </cms:if>
                    </div>
                    <div class="input--wrapper">
                        <div class="contact-forms__input-title">Kontakt broj</div>
                        <cms:input class='contact-forms__input' type='text' name='kontaktbroj' id='kontaktbroj' required='1' placeholder='+385 99 123 4567' />
                        <cms:if k_error_kontaktbroj>
                            <span id='name_error' class='error' style="display: block; color: red;">Niste upisali kontakt broj</span>
                        </cms:if>
                    </div>
                    <div class="input--wrapper"></div>
                    <div class="input--wrapper">
                        <div class="contact-forms__input-title">Poruka</div>
                        <cms:input class='contact-forms__input' type='textarea' name='message' id='message' rows='10' required='1' placeholder='Pišite ovdje...' ></cms:input>
                        <cms:if k_error_message>
                            <span id='name_error' class='error' style="display: block; color: red;">Niste upisali poruku</span>
                        </cms:if>
                    </div>
                    <input type='submit' id='send_message' class='contact-forms__button' value='Pošalji poruku' />
                    <cms:if k_success>
                        <span style="color: green;">Poslano.</span>
                        <cms:send_mail from=k_email_from to=k_email_to subject='Upit sa stranice'>
                            <cms:show k_success />
                        </cms:send_mail>
                    </cms:if>
                    <cms:if k_error>
                        <span style="color: red;">Dogodila se greška pri slanju</span>
                    </cms:if>
                </cms:form>
            </div>
            <div class="contact__card contact__card--screen-desktop clearfix">
                <div class="contact__card-header">KONTAKT INFORMACIJE</div>
                <div class="contact__card-bottom">
                    <p>Imate pitanje, treba Vam opširniji odgovor? <b>Javite nam se.</b></p>
                    <div class="contact__card-telephone">
                        <img src="/images/iconmonstr-phone-1-24.png">
                        <span><cms:get_custom_field 'broj_telefona' masterpage='informacije.php' /></span>
                    </div>
                    <div class="contact__card-mail">
                        <img src="/images/iconmonstr-email-2-24.png">
                        <span><cms:get_custom_field 'email_tvrtke' masterpage='informacije.php' /></span>
                    </div>
                    <div class="question-mark">?</div>
                    <div class="question-mark">?</div>
                    <div class="question-mark">?</div>
                    <div class="question-mark">?</div>
                </div>
            </div>
        </div>
        <cms:pages masterpage='footer.php'>
            <cms:embed 'footer.php' />
        </cms:pages>
    </body>
</html>
<?php COUCH::invoke(); ?>