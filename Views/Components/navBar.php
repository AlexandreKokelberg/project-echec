<ul class="navbar">
    <?php if (isset($_SESSION["joueur"])) : ?>
    <li class="menu"><a href="/">Home</a></li>
    <li class="menu"><a href="profil">Profil</a></li>
    <li class="menu"><a href="deconnexion">Déconnexion</a></li>
    <li class="menu"><a href="creeMatch">Créer un Match</a></li>
    <!-- <li class="menu"><a href="NeverGonnaGiveYouUp">Ne pas oublier de fermer son pc</a></li><!- Trollolololol -> bruh -->
    <?php else : ?>
    <li class="menu"><a href="inscription">Inscription</a></li>
    <li class="menu"><a href="connexion">Connexion</a></li>
    <?php endif ?>
</ul>