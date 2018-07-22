<?php require_once( 'couch/cms.php' ); ?>
<footer class="footer">
    <div class="footer__container clearfix">
        <div class="footer__company-info">
            <img src="/images/moto-expert-logo.svg">
            <div class="company-info__container">
                <span>Moto Expert d.o.o.</span>
                <p>OIB: <cms:get_custom_field 'oib_tvrtke' masterpage='informacije.php' />; MB: <cms:get_custom_field 'mb_tvrtke' masterpage='informacije.php' /></p>
                <p>Žiro račun: <cms:get_custom_field 'ziro_racun' masterpage='informacije.php' /></p>
            </div>
        </div>
        <div class="footer__contact">
            <span>Kontaktirajte nas</span>
            <span><cms:get_custom_field 'broj_telefona' masterpage='informacije.php' /></span>
            <span><cms:get_custom_field 'email_tvrtke' masterpage='informacije.php' /></span>
            <a href="<cms:get_custom_field 'facebook_link' masterpage='informacije.php' />"><img src="/images/facebook.svg"></a>
            <a href="<cms:get_custom_field 'instagram_link' masterpage='informacije.php' />"><img src="/images/instagram.svg"></a>
        </div>
        <ul class="footer__navigation">
            <li><a href="<cms:link 'index.php' />">Naslovnica</a></li>
            <li><a href="<cms:link 'ponuda-motora.php' />">Ponuda motora</a></li>
            <li><a href="<cms:link 'kontakt.php' />">Kontakt</a></li>
        </ul>
    </div>
    <div class="footer__signature">
        <span class="footer__fire">Made with 🔥</span>
        <span class="footer__fuel">FUEL</span>
    </div>
</footer>
<?php COUCH::invoke(); ?>