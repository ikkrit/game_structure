<section class="game__container">

    <div class="game">

        <div class="game__head">
            <h2>Rpg nav </h2>
            <p>Le jeu de rôle Dungeons & Dragons consiste à narrer des aventures dans des mondes peuplés de guerriers et de magiciens. Tout comme les jeux où l'on s'amuse à faire semblant, D&D repose sur l'imagination.Dans ce monde fantastique, les possibilités sont infinies.Prêt à en savoir plus sur le jeu de rôle D&D ?</p>
        </div>


        <div class="game__menu">
            <?php if(isset($_SESSION['user']) && !empty($_SESSION['user']['id'])): ?>
                <li><a href="/game/init">Commencer</a></li>
                <li><a href="/game/continue">Continuer</a></li>
                <li><a href="/game/score">Score</a></li>
            <?php else: ?>
                <h3><a href="/users/login">Connecter-vous </a>ou 
                <a href="/users/register">Inscrivez-vous </a>pour commencer</h3>
            <?php endif; ?>
        </div>

    </div>

</section>

