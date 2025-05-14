<?php

require_once ("Models/tournoisModel.php");

if ($uri === "/CreeMatch") {
    $tournois = selectAllTournois($pdo);
    $title = "Création de Match...";
    $template = "Views/Match/createMatch.php";
    require_once("Views/base.php");
}