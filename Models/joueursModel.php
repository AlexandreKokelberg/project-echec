<?php

function createUser($pdo)
{
    try {
        $query = 'insert into joueurs(PlayerUsername, PlayerEmail, PlayerPassword)
        values (:PlayerUsername, :PlayerEmail, :PlayerPassword)';
        //prépare de la requête
        $ajoutJoueur = $pdo->prepare($query);
        // exécution en attribuant les valeurs récupérées dans le formulaire aux paramètres
        $ajoutJoueur->execute([
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
function updateUser($pdo)
{
    try {
        $query = 'update joueurs set PlayerUsername = :PlayerUsername, PlayerEmail = :PlayerEmail, PlayerPassword = :PlayerPassword where PlayerID = :PlayerID';
        //prépare de la requête
        $ajoutJoueur = $pdo->prepare($query);
        // exécution en attribuant les valeurs récupérées dans le formulaire aux paramètres
        $ajoutJoueur->execute([
            'PlayerUsername' => $_POST["username"],
            'PlayerEmail' => $_POST["email"],
            'PlayerPassword' => $_POST["password"],
            'PlayerID' => $_SESSION["joueur"]->PlayerID // récupération de l'id de l'utilisateur en session actuallement connecté
        ]);
        } catch (PDOEXEPTION $e) {
            $message = $e->getMessage();
            die($message);
        }
}
function updateSession($pdo)
{
    try {
        $query = 'select * from joueurs where PlayerID = :PlayerID';
        $selectJoueur = $pdo->prepare($query);
        $selectJoueur->execute([
            'PlayerID' => $_SESSION["joueur"]->PlayerID // récupération de l'id de l'utilisateur en session actuallement connecté
        ]);
        $joueur = $selectJoueur->fetch(); // pas fetchAll car on ne veut qu'une ligne !
        $_SESSION["joueur"] = $joueur;
        } catch (PDOEXEPTION $e) {
            $message = $e->getMessage();
            die($message);
        }
}