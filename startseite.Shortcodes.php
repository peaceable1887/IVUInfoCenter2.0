<?php
/*
Plugin Name: Shortcodes: Startseite
Description: Stellt alle Funktionen für die Startseite zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/

add_shortcode("sc_btnSupportRequest","btnSupportRequest");

/*function btnSupportRequest()
{
    include_once "controller/Startseite/Startseite.php";
    include_once "view/Startseite/ButtonSupportanfrage.php";

    $addFunctions = new Startseite();

    $addFunctions->showBtnSupportRequest();

}*/

add_shortcode("sc_sliderCurrentSeminare", "sliderCurrentSeminare");

function sliderCurrentSeminare()
{

    include_once "css/rootSTYLE.php";
    include_once "css/style.php";
    include_once "Database/ivu-dbCon.php";
    include_once "css/Slider/sliderSTYLE.php";
    include_once "css/formContainerSTYLE.php";
    include_once "model/semTile.php";
    include_once "controller/Startseite/Startseite.php";
    include_once("css/AkademieEvents/akademieEventsSTYLE.php");
    include_once("Sql/AkademieEvents/tile/loadTileContent.php");

    $slider = new Startseite();

    $slider->show_sc_sliderCurrentSeminare(new infoCenterDbCon(),new loadTileContent());

}

add_shortcode("sc_sliderTest", "sliderTest");

function sliderTest()
{

}

add_shortcode("sc_buttonsStartseiteMenu", "buttonsStartseiteMenu");

function buttonsStartseiteMenu()
{
    include_once "css/rootSTYLE.php";
    include_once "view/Startseite/MenuStartseite.php";
    include_once "css/btn.style.php";
    include_once "css/menuSTYLE.php";

    $menuStartseite = new MenuStartseite();

    echo $menuStartseite->showMenu();

}

add_shortcode("sc_sliderCurrentInfos", "sliderCurrentInfos");

function sliderCurrentInfos()
{
    include_once "css/rootSTYLE.php";
    include_once "Database/ivu-dbCon.php";
    include_once "css/Slider/sliderCurrentInfosSTYLE.php";
    include_once "model/infoTile.php";
    include_once "controller/Startseite/Startseite.php";

    $slider = new Startseite();

    $slider->show_sc_sliderCurrentInfos();
}