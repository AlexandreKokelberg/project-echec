<?php       // non fermé car seulement du php
    session_start();
    require_once("Config/connectDatabase.php");
    require_once("Controllers/indexController.php");
    require_once("Controllers/joueurControllers.php");

    // on ajoutera par la suite le fichier de configuration de la connextion à la bdd
    // ainsi que le session_stnart();
    // et le fichier des constates.