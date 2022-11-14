<nav class="navbar">
    <h2 class="logo">RPG Nav</h2>
    <div class="toggle" onclick="toggleMenu();"></div>

    <ul class="navigation">
        <li><a href="/home">Home</a></li>
        <li><a href="/game">Le jeux</a></li>
        <li><a href="/contact">Contact</a></li>
        <?php if(isset($_SESSION['user']) && !empty($_SESSION['user']['id'])): ?>
            <li><a href="/users/profil">Profil</a></li>
            <li><a href="/users/logout">Déconnexion</a></li>
        <?php else: ?>
            <li><a href="/users/login">Connexion</a></li>
            <li><a href="/users/register">Inscription</a></li>
        <?php endif; ?>

    </ul>

</nav>