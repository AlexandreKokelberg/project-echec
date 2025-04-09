<ul class="navbar">
    <?php if (isset($_SESSION["joueur"])) : ?>
    <li class="menu"><a href="/">Home</a></li>
    <li class="menu"><a href="deconnexion">Déconnexion</a></li>
    <?php else : ?>
    <li class="menu"><a href="inscription">Inscription</a></li>
    <li class="menu"><a href="connexion">Connexion</a></li>
    <?php endif ?>
</ul>