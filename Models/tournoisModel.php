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