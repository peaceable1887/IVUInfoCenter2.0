<?php
/*
Plugin Name: Shortcodes: Startseite
Description: Stellt alle Funktionen für die Startseite zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/

add_shortcode("sc_btnSupportRequest","btnSupportRequest");

function btnSupportRequest()
{
    include_once "controller/Startseite/Startseite.php";
    include_once ("css/buchung.php");
    include_once "view/Startseite/ButtonSupportanfrage.php";

    $addFunctions = new Startseite();

    $addFunctions->showBtnSupportRequest();

}

add_shortcode("sc_sliderCurrentSeminare", "sc_sliderCurrentSeminare");

function sc_sliderCurrentSeminare()
{
    include_once "Database/ivu-dbCon.php";
    include_once "css/slider.php";
    include_once "css/buchung.php";
    include_once "model/semTile.php";
    include_once ("css/AkademieEvents/akademieEvents.php");
    include_once("Sql/AkademieEvents/tile/loadTileContent.php");

    $slider = new Startseite();

    $slider->show_sc_sliderCurrentSeminare();

}

add_shortcode("sc_buttonsStartseiteMenu", "buttonsStartseiteMenu");

function buttonsStartseiteMenu()
{
    include_once "view/Startseite/MenuStartseite.php";
    include_once "css/btn.style.php";

    $menuStartseite = new MenuStartseite();

    echo $menuStartseite->showMenu();

}