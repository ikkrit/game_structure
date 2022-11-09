<?php require_once ROOT.'/Views/fractions/_head.html.php';?>

<!-------------------------- HEADER -------------------------->

    
 <?php require_once ROOT.'/Views/home/_home_header.html.php';?>  


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


    


