<div class="flex space-evenly wrap">
    <form method="post" action="">
        <fieldset>
            <legend>Crée Match</legend>
            <div class="mb-3">
                <label for="Joueur1" class="form-label">Nom</label>
                <select type="text" placeholder="Joueur 1" class="form-control" id="Joueur1" name="Joueur1">
                </select>
            </div>
            <div class="mb-3">
                <label for="Joueur2" class="form-label">Email</label>
                <select type="text" placeholder="Joueur 2" class="form-control" id="Joueur2" name="Joueur2">
                </select>
            </div>
            <div class="mb-3">
                <label for="Date" class="form-label">Mot de passe</label>
                <input type="date" placeholder="Date" class="form-control" id="Date" name="Date">
            </div>
            <div class="mb-3">
                <label for="Time" class="form-label">Mot de passe</label>
                <input type="text" placeholder="Temps" class="form-control" id="Time" name="Time">
            </div>
            <div>
                <button name="btnEnvoi" value="button" class="button">Envoyer</button>
            </div>
        </fieldset>
    </form>
</div>