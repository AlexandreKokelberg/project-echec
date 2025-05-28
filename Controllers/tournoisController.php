<?php

require_once ("Models/tournoisModel.php");

if ($uri === "/VoirTournois") {
    $tournoi = selectTournoi($pdo);
    $title = "gfknfsbgfklji";
    $template = "Views/Match/voirTournois.php";
    require_once("Views/base.php");
}