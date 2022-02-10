<?php
/*
Plugin Name: Shortcodes: Hilfe und Infos
Description: Stellt alle Funktionen für Hilfe und Infos zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/

add_shortcode("sc_helpAndInfos", "helpAndInfos");

function helpAndInfos()
{
    include_once "css/rootSTYLE.php";
    include_once "css/Hilfe und Infos/helpAndInfosSTYLE.php";
    include_once "view/Hilfe und Infos/HilfeUndInfos.php";

    $content = new HilfeUndInfos();

    echo $content->showContent();
}

