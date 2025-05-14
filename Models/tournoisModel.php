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