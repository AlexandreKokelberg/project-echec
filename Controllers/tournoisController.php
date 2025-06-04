<?php

require_once ("Models/tournoisModel.php");

if ($uri === "/VoireTournois") {
    $tournoi = selectTournoi($pdo);
    $title = "gfknfsbgfklji";
    $template = "Views/Match/VoireTournois.php";
    require_once("Views/base.php");
} elseif (isset($_GET["TournoisID"]) && $uri === "/VoireTournois?TournoisID=" . $_GET["TournoisID"]) {
    $tournoi = selectOneTournoi($pdo);
    $title = "Voire Tournois";
    $template = "Views/Tournois/VoireTournois.php";
    require_once("Views/base.php");
}