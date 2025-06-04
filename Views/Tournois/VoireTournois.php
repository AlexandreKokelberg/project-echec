<div class="flex space-evenly wrap">
    <form method="post" action="">
        <fieldset>
            <legend> <?php if (isset($_SESSION["user"])) : ?> Profil <?php else : ?> Inscription <?php endif ?></legend>
            <div class="mb-3">
                <label for="TournoisName" class="form-label">Nom</label>
                <input type="text" placeholder="Nom" class="form-control" id="TournoisName" name="TournoisName" required <?php if (isset($_SESSION["joueur"])) : ?>value="<?= $_SESSION['joueur']->PlayerUsername ?>" <?php endif ?>>
            </div>
            <div class="mb-3">
                <label for="TournoisRegles" class="form-label">Email</label>
                <input type="text" placeholder="Email" class="form-control" id="email" name="email" required <?php if (isset($_SESSION["joueur"])) : ?>value="<?= $_SESSION['joueur']->PlayerEmail ?>" <?php endif ?>>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Mot de passe</label>
                <input type="password" placeholder="Mot de passe" class="form-control" id="password" name="password" required <?php if (isset($_SESSION["joueur"])) : ?>value="<?= $_SESSION['joueur']->PlayerPassword ?>" <?php endif ?>>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Mot de passe</label>
                <input type="password" placeholder="Mot de passe" class="form-control" id="password" name="password" required <?php if (isset($_SESSION["joueur"])) : ?>value="<?= $_SESSION['joueur']->PlayerPassword ?>" <?php endif ?>>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Mot de passe</label>
                <input type="password" placeholder="Mot de passe" class="form-control" id="password" name="password" required <?php if (isset($_SESSION["joueur"])) : ?>value="<?= $_SESSION['joueur']->PlayerPassword ?>" <?php endif ?>>
            </div>
            <div>
                <button name="btnEnvoi" value="button" class="button">Envoyer</button>
            </div>
        </fieldset>
    </form>
</div>
