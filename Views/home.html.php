<?php require_once ROOT.'/Views/fractions/_head.html.php';?>

<!-------------------------- HEADER -------------------------->

    <header class="header">
        <nav class="navbar__container">

            <div class="navbar__logo">
                <img src="/assets/img/logos/rpg_icon.png" alt="logo rpg">
            </div>

            <input type="checkbox" name="" id="check">
            <label for="check" class="bar-btn">
                <i class="fas fa-bars"></i>
            </label>

            <ul class="nav__menu">
                <li class="nav__menu-link"><a class="active" href="#">Home</a></li>
                <li class="nav__menu-link"><a href="#">A Propos</a></li>
                <li class="nav__menu-link"><a href="#">Le Monde</a></li>
                <li class="nav__menu-link"><a href="#">Services</a></li>
                <li class="nav__menu-link"><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="nav__bannner-text">
        <h2>FITNESS AND GYM</h2>
        <h1>BE IN THE <span>GAME</span></h1>

        <div class="">
            <a href="#" class="button__1">EXPLORE</a>
            <a href="#" class="button__2">BOOK NOW</a>
        </div>
    </div>



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

        <?= $content;?>


    
<!------------------------- FOOTER ------------------------->

<?php require_once ROOT.'/Views/fractions/_footer.html.php';?>


    


