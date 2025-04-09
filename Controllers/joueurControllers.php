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
        createUser($pdo);
        header('location:/connexion');
    }
    $title = "Inscription";
    $template = "Views/Joueurs/inscriptionOrEditProfile.php";
    require_once("Views/base.php");
}