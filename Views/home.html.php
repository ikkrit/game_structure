<?php require_once ROOT.'/Views/fractions/_head.html.php';?>

<!-------------------------- HEADER -------------------------->

    
    <section class="section__header">

        <div class="circle"></div>

        <header class="header">
            <a href="#" class="logo"><img src="/assets/img/logos/logo.png" alt=""></a>
            <div class="toggle" onclick="toggleMenu();"></div>

            <ul class="navigation">
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">What's New</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

        </header>

        <div class="content">
            <div class="content__text">
                <h2>It's not just Coffee<br>It's <span>Starbucks</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, neque sit? Consequatur dolor reiciendis impedit iusto quisquam! Sequi neque veritatis molestiae laboriosam consequatur, provident inventore sit obcaecati quibusdam fugiat qui.</p>
                <a href="#">Learn More</a>
            </div>
            <div class="content__img">
                <img src="/assets/img/home/img1.png" class="img__item" alt="">
            </div>
        </div>

        <ul class="thumb">
            <li><img src="/assets/img/home/thumb1.png" onclick="imgSlider('/assets/img/home/img1.png'); changeCirclecolor('#017143')" alt=""></li>
            <li><img src="/assets/img/home/thumb2.png" onclick="imgSlider('/assets/img/home/img2.png'); changeCirclecolor('#eb7495')" alt=""></li>
            <li><img src="/assets/img/home/thumb3.png" onclick="imgSlider('/assets/img/home/img3.png'); changeCirclecolor('#d752b1')" alt=""></li>
        </ul>

        <ul class="social">
            <li><a href="#"><img src="/assets/img/icons/facebook.png" alt=""></a></li>
            <li><a href="#"><img src="/assets/img/icons/twitter.png" alt=""></a></li>
            <li><a href="#"><img src="/assets/img/icons/instagram.png" alt=""></a></li>
        </ul>

    </section>


<!-------------------------- MAIN -------------------------->


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

        <main class="main">
            <?= $content;?>
        </main>


<!------------------------- FOOTER ------------------------->

<?php require_once ROOT.'/Views/fractions/_footer.html.php';?>


    


