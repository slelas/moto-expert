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
        <img class="navigation__logo" src="/images/moto-expert-logo.svg" alt="Moto Expert logo">
        <a class="navigation__button" href="#">
            <img class="button__icon" src="/images/send-message-icon.svg" alt="Send message icon">
            <span class="button__text">Kontaktirajte nas</span>
        </a>
        <ul class="navigation__items">
            <a href="<cms:link 'naslovnica.php' />"><li class="navigation__item">Naslovnica</li></a>
            <a href="<cms:link 'ponuda-motora.php' />"><li class="navigation__item">Ponuda motora</li></a>
            <a href="#"><li class="navigation__item">Način plaćanja</li></a>
        </ul>
    </div>
</nav>
<?php COUCH::invoke(); ?>