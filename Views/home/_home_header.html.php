<!-------------------------- HEADER -------------------------->

    
<section class="section__header home">

<div class="circle"></div>

<header class="header">
    <a href="#" class="logo"><img src="/assets/img/logos/logo.png" alt="logo rpg_nav"></a>
    <div class="toggle" onclick="toggleMenu();"></div>

    <ul class="navigation">
        <li><a href="/home">Home</a></li>
        <li><a href="/game">Jouer</a></li>
        <li><a href="/contact">Contact</a></li>
        <?php if(isset($_SESSION['user']) && !empty($_SESSION['user']['id'])): ?>
            <li><a href="/users/profil">Profil</a></li>
            <li><a href="/users/logout">Déconnexion</a></li>
        <?php else: ?>
            <li><a href="/users/login">Connexion</a></li>
            <li><a href="/users/register">Inscription</a></li>
        <?php endif; ?>
    </ul>

</header>

<div class="content">
    <div class="content__text">
        <h2><span>Chrono Trigger</span><br>sur navigateur </h2>
        <p>Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.</p>
        <a class="btn__start" href="/game">Commencer à jouer</a>
    </div>

    <div class="content__img">
        <img src="/assets/img/home/img1.png" class="img__item" alt="">
    </div>
</div>

<ul class="thumb">
    <li><img src="/assets/img/home/thumb1.png" onclick="imgSlider('/assets/img/home/img1.png'); changeCirclecolor('#CD5C5C')" alt=""></li>
    <li><img src="/assets/img/home/thumb2.png" onclick="imgSlider('/assets/img/home/img2.png'); changeCirclecolor('#DAA520')" alt=""></li>
    <li><img src="/assets/img/home/thumb3.png" onclick="imgSlider('/assets/img/home/img3.png'); changeCirclecolor('#800080')" alt=""></li>
    <li><img src="/assets/img/home/thumb4.png" onclick="imgSlider('/assets/img/home/img4.png'); changeCirclecolor('#BDB76B')" alt=""></li>
    <li><img src="/assets/img/home/thumb5.png" onclick="imgSlider('/assets/img/home/img5.png'); changeCirclecolor('#B0C4DE')" alt=""></li>
    <li><img src="/assets/img/home/thumb6.png" onclick="imgSlider('/assets/img/home/img6.png'); changeCirclecolor('#007300')" alt=""></li>
    <li><img src="/assets/img/home/thumb7.png" onclick="imgSlider('/assets/img/home/img7.png'); changeCirclecolor('#EEE8AA')" alt=""></li>
</ul>

<ul class="social">
    <li><a href="#"><img src="/assets/img/icons/facebook.png" alt=""></a></li>
    <li><a href="#"><img src="/assets/img/icons/twitter.png" alt=""></a></li>
    <li><a href="#"><img src="/assets/img/icons/instagram.png" alt=""></a></li>
</ul>

</section>