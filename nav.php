<?php require_once( 'couch/cms.php' ); ?>
<nav class="navigation">
    <div class="navigation__container clearfix">
        <input type="checkbox" id="menu-toggle"/>
        <label for="menu-toggle" class="hamburger-container">
            <img class="hamburger" src="/images/menu.png">
        </label>
        <label for="menu-toggle" class="cross-container">
            <img class="cross" src="/images/cross.png">
        </label>
        <a href="<cms:link 'index.php' />"><img class="navigation__logo" src="/images/moto-expert-logo.svg" alt="Moto Expert logo"></a>
        <a class="navigation__button" href="<cms:link 'kontakt.php' />">
            <img class="button__icon" src="/images/send-message-icon.svg" alt="Send message icon">
            <span class="button__text">Kontaktirajte nas</span>
        </a>
        <ul class="navigation__items">
            <a href="<cms:link 'index.php' />"><li class="navigation__item <cms:if k_template_name=='index.php'>navigation__item--state-active</cms:if>">Naslovnica</li></a>
            <a href="<cms:link 'ponuda-motora.php' />"><li class="navigation__item
            <cms:if k_template_name=='ponuda-motora.php'>navigation__item--state-active</cms:if>
            <cms:if k_template_name=='novo.php'>navigation__item--state-active</cms:if>
            <cms:if k_template_name=='rabljeno.php'>navigation__item--state-active</cms:if>
            <cms:if k_template_name=='u-dolasku.php'>navigation__item--state-active</cms:if>
            <cms:if k_template_name=='motor.php'>navigation__item--state-active</cms:if>">Ponuda motora</li></a>
            <a href="<cms:link 'kontakt.php' />" class="navigation__item--desktop"><li class="navigation__item">Kontakt</li></a>
        </ul>
    </div>
</nav>
<?php COUCH::invoke(); ?>