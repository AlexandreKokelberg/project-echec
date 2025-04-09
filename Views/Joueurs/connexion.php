<div class="connexion-field">
    <form method="post" action="">
        <fieldset>
            <legend>Se connecter</legend>
            <div class="mb-3">
                <label for="Email" class="form-label">Login</label>
                <input type="text" placeholder="Email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Mot de passe</label>
                <input type="password" placeholder="Mot de passe" class="form-control" id="password" name="password" required>
            </div>
            <div>
                <button name="btnEnvoi" class="button">Envoi</button>
            </div>
        </fieldset>
        <div>
            <h4 class="text-danger">Pas encore inscrit ?</h4>
            <a href="inscriptionOrEditProfil.php" class="button-secondaire">Cliquez ici !</a>
        </div>
    </form>
</div>