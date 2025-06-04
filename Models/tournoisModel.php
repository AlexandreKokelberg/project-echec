<?php

function selectAllTournois($pdo) 
{
    try {
        $query = 'select * from tournois;';
        $selectTournois = $pdo->prepare($query);
        $selectTournois->execute();
        $tournois = $selectTournois->fetchAll();
        return $tournois;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function selectAllPlayers($pdo) 
{
    try {
        $query = 'select * from joueurs;';
        $selectPlayers = $pdo->prepare($query);
        $selectPlayers->execute();
        $players = $selectPlayers->fetchAll();
        return $players;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function selectOneTournoi($pdo)
{
    try {
        $query = 'select * from tournois where TournoisID = :TournoisID';
        $selectTournois = $pdo->prepare($query);
        $selectTournois->execute([
            'TournoisID' => $_GET["TournoisID"]
        ]);
        $tournois = $selectTournois->fetch();
        return $tournois;
    } catch (PDOExeeption $e) {
        $message = $e->getMessage();
        die($message);
    }
}