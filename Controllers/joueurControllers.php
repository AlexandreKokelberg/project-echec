<?php

require_once("Models/joueursModel.php");

if ($uri === "/connexion") {
    // vérifier si l'utilisateur a cliqué sur le bouton du formulaire
    if(isset($_POST['btnEnvoi'])){
        // tentative de connexion et récupération des données de l'utilisateur ret ouverture d'une session
        if(connectUser($pdo)){
            // redirection vers la page d'accuel
            header("location:/");
        }
        else {
            // cas d'erreur
            $erreur=true;
        }
    }
    $title = "Connexion";
    $template = "Views/Joueurs/connexion.php";
    require_once("Views/base.php");
} elseif ($uri === "/deconnexion") {
    session_destroy();
    header("location:/");
} elseif ($uri === "/inscription") {
    if(isset($_POST['btnEnvoi'])) {
        $messageError = verifyEmptyData();
        if(!$messageError) {
            createUser($pdo);
            header('location:/connexion');
       }
    }
    $title = "Inscription";
    $template = "Views/Joueurs/inscriptionOrEditProfile.php";
    require_once("Views/base.php");
} elseif ($uri === "/profil") {
    if(isset($_POST['btnEnvoi'])){
        // vérification des données encodées
        $messageError = verifyEmptyData();
        // s'ili n'y a pas d'erreur
        if(!$messageError){
            // Modification des données de l'utilisateur dans la base de données
            updateUser($pdo);
            // Mise à jour de la variable session
            updateSession($pdo);
            // redirection vers la variable de profil
            header('location:/profil');
        }
    }
    $title = "Mise à jour du profil";
    $template = "Views/Joueurs/inscriptionOrEditProfile.php";
    require_once("Views/base.php");
} elseif ($uri === "/deleteProfil") {
    deleteUser($pdo);
    header("location:/deconnexion");
}
function verifyEmptyData()
{
    foreach ($_POST as $key => $value) {
        if (empty(str_replace(' ','', $value))){
            $messageError[$key] = "Votre " . $key . " est vide.";
        }
    }
    if (isset($messageError)) {
        return $messageError;
    } else {
        return false;
    }
}