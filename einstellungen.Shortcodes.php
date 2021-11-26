<?php
/*
Plugin Name: Shortcodes: Einstellungen (Persönlicher Bereich)
Description: Stellt alle Funktionen für den Persönlichen Bereich zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/
session_start();

add_shortcode("sc_profilSettings", "profilSettings");

function profilSettings()
{
    include_once "css/rootSTYLE.php";
    include_once "css/btn.style.php";
    include_once "css/formContainerSTYLE.php";
    include_once "css/einstellungen/einstellungenSTYLE.php";
    include_once ("Database/ivu-dbCon.php");
    include_once ("Sql/Users/Login/loadUser.php");
    include_once ("Sql/Einstellungen/loadProfilData/loadProfilData.php");
    include_once "view/Einstellungen/ProfilEditieren.php";
    include_once "controller/Einstellungen/Einstellungen.php";

    $profilSettings = new Einstellungen();

    $profilSettings->showProfilSettings();
}