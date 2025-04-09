<?php

function createUser($pdo)
{
    try {
        $query = 'insert into joueurs(PlayerUsername, PlayerEmail, PlayerPassword)
        values (:PlayerUsername, :PlayerEmail, :PlayerPassword)';
        //prépare de la requête
        $ajoutJoueur = $pdo->prepare($query);
        // exécution en attribuant les valeurs récupérées dans le formulaire aux paramètres
        $ajouteJoueur = $pdo->prepare([
            'PlayerUsername' => $_POST["username"],
            'PlayerEmail' => $_POST["email"],
            'PlayerPassword' => $_POST["password"]
        ]);
        } catch (PDOEXEPTION $e) {
            $message = $e->getMessage();
            die($message);
        }
}
function connectUser($pdo)
{
    try {
        $query = 'select * from joueurs where PlayerEmail = :PlayerEmail and PlayerPassword = :PlayerPassword';
        //prépare de la requête
        $connectJoueur = $pdo->prepare($query);
        // exécution en attribuant les valeurs récupérées dans le formulaire aux paramètres
        $connectJoueur->execute([
            'PlayerEmail' => $_POST["email"],
            'PlayerPassword' => $_POST["password"]
        ]);
        //stockage des données trouvées dans la variable $joueur
        $joueur = $connectJoueur->fetch();
        if (!$joueur){
            return false;
        }
        else {
            //ajout de celle-ci à la variable session
            $_SESSION["joueur"] = $joueur;
            return true;
        }
        } catch (PDOEXEPTION $e) {
            $message = $e->getMessage();
            die($message);
        }
}