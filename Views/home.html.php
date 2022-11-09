<?php require_once ROOT.'/Views/fractions/_head.html.php';?>

<!-------------------------- HEADER -------------------------->

    
    <section class="section__header">

        <div class="circle"></div>

        <header class="header">
            <a href="#" class="logo"><img src="/assets/img/logos/logo.png" alt=""></a>
            <div class="toggle" onclick="toggleMenu();"></div>

            <ul class="navigation">
                <li><a href="/home">Home</a></li>
                <li><a href="#">Le jeux</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>

        </header>

        <div class="content">
            <div class="content__text">
                <h2>Le RPG navigateur<br>dont tu est le <span>hero</span></h2>
                <p>Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.Choisissez votre hero parmis les 3 classes et parter à l'aventure dans le monde d'Arava.</p>
            </div>

            <div class="content__img">
                <img src="/assets/img/home/img1.png" class="img__item" alt="">
            </div>
        </div>

        <ul class="thumb">
            <li><img src="/assets/img/home/thumb1.png" onclick="imgSlider('/assets/img/home/img1.png'); changeCirclecolor('#5F345F')" alt=""></li>
            <li><img src="/assets/img/home/thumb2.png" onclick="imgSlider('/assets/img/home/img2.png'); changeCirclecolor('#00008E')" alt=""></li>
            <li><img src="/assets/img/home/thumb3.png" onclick="imgSlider('/assets/img/home/img3.png'); changeCirclecolor('#007300')" alt=""></li>
        </ul>

        <ul class="social">
            <li><a href="#"><img src="/assets/img/icons/facebook.png" alt=""></a></li>
            <li><a href="#"><img src="/assets/img/icons/twitter.png" alt=""></a></li>
            <li><a href="#"><img src="/assets/img/icons/instagram.png" alt=""></a></li>
        </ul>

    </section>


<!-------------------------- MESSAGES -------------------------->


        <div class="message__text">
            <?php if(!empty($_SESSION['erreur'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['erreur']; unset($_SESSION['erreur'])?>
                </div>
            <?php endif; ?>

            <?php if(!empty($_SESSION['message'])): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['message']; unset($_SESSION['message'])?>
                </div>
            <?php endif; ?>
        </div>

<!-------------------------- MAIN -------------------------->

        <main class="main">
            <?= $content;?>
        </main>

<!------------------------- FOOTER ------------------------->

<?php require_once ROOT.'/Views/fractions/_footer.html.php';?>


    


