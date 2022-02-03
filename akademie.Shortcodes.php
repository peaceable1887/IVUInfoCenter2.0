<?php
/*
Plugin Name: Shortcode: Akademie und Eventbereich
Description: Stellt alle Funktionen für den Akademie und Eventbereich zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/
session_start();

add_shortcode("sc_buttonsMenu", "buttonsMenu");

function buttonsMenu()
{
    include_once "css/rootSTYLE.php";
    include_once "css/btn.style.php";
    include_once "css/menuSTYLE.php";
    include_once "view/Akademie/Menu.php";

    $menu = new Menu();

    echo $menu->showMenu();

}
//in Arbeit.....
add_shortcode("shortcode_sortByDateOrSubject", "sortByDateOrSubject");

function sortByDateOrSubject()
{
    include_once "css/rootSTYLE.php";
    include_once("css/btn.style.php");
    include_once "css/global/filterSTYLE.php";
    include_once("css/AkademieEvents/akademieEventsSTYLE.php");
    include_once "view/Akademie/Filter.php";

    $filter = new Filter();

    echo $filter->showFilter();

}

add_shortcode("sc_loadUpcommingEvents", "loadUpcommingEvents");

function loadUpcommingEvents()
{
    include_once("Database/ivu-dbCon.php");
    include_once("model/info_sem_event.php");
    include_once "controller/Akademie/Akademie.php";
    include_once "css/rootSTYLE.php";
    include_once("css/AkademieEvents/akademieEventsSTYLE.php");
    include_once "css/tableSTYLE.php";
    include_once("Sql/AkademieEvents/allEvents/sqlQueryAllEvents.php");

    $UEContent = new Akademie();

    $UEContent->showLoadUpcommingEvents(new infoCenterDbCon(),new sqlQueryAllEvents());
}

//in Arbeit....
add_shortcode("sc_pageNumber", "pageNumber");

function pageNumber()
{
    include_once "css/rootSTYLE.php";
    include_once "css/AkademieEvents/akademieEventsSTYLE.php";

    //noch unfertig und auslagern....
    echo "<div class='paginationContainer'>
            <span style='font-size: 16px; font-family: \"roboto condensed\"; margin-right: 10px;'>Seite</span>
          <div class=\"pagination\">            
            <a href=\"#\" class=\"active\">1</a>
           
          </div></div>";
}

add_shortcode("sc_showSeminarDetails", "showSeminarDetails");

function showSeminarDetails()
{

  /*  include_once "css/rootSTYLE.php";
    include_once("css/style.php");
    include_once "css/btn.style.php";
    include_once "css/AkademieEvents/akademieEventsSTYLE.php";
    include_once("Sql/AkademieEvents/tile/loadTileContent.php");
    include_once("Sql/AkademieEvents/allEvents/sqlQueryAllEvents.php");
    include_once("Sql/AkademieEvents/contentDescription/loadDescription.php");
    include_once("Sql/AkademieEvents/contentMatter/loadMatter.php");
    include_once("Sql/AkademieEvents/contentTargetGroup/loadTargetGroup.php");
    include_once("Sql/AkademieEvents/contentRequirement/loadRequirement.php");
    include_once("Database/ivu-dbCon.php");
    include_once "model/semTile.php";
    include_once "view/Akademie/SeminarDetails.php";
    include_once "controller/Akademie/Akademie.php";

    $seminarDetails = new SeminarDetails();
    $semContent = new Akademie();

    echo "hallo welt1";
    echo $seminarDetails->showSeminarDetails($semContent->showBuchung_seminarBlock(),
        $semContent->showBuchung_beschreibung(), $semContent->showBuchung_inhalt(), $semContent->showBuchung_zielgruppe(),
        $semContent->showBuchung_voraussetzungen(), $semContent->showBuchung_button_zurBuchung());*/
}

add_shortcode("shortcode_buchung_seminarBlock", "buchung_seminarBlock");

function buchung_seminarBlock()
{
    include_once "css/rootSTYLE.php";
    include_once("css/style.php");
    include_once("Sql/AkademieEvents/tile/loadTileContent.php");
    include_once("Sql/AkademieEvents/allEvents/sqlQueryAllEvents.php");
    include_once("Database/ivu-dbCon.php");
    include_once "model/semTile.php";
    include_once "controller/Akademie/Akademie.php";

    $SBContent = new Akademie();

    $SBContent->showBuchung_seminarBlock();

}

add_shortcode("shortcode_buchung_beschreibung", "buchung_beschreibung");

function buchung_beschreibung()
{
    include_once "css/rootSTYLE.php";
    include_once("Sql/AkademieEvents/contentDescription/loadDescription.php");
    include_once "css/AkademieEvents/akademieEventsSTYLE.php";
    include_once "controller/Akademie/Akademie.php";

    $BBContent = new Akademie();

    $BBContent->showBuchung_beschreibung();
}

add_shortcode("shortcode_buchung_inhalt", "buchung_inhalt");

function buchung_inhalt()
{
    include_once "css/rootSTYLE.php";
    include_once("Sql/AkademieEvents/contentMatter/loadMatter.php");
    include_once "css/AkademieEvents/akademieEventsSTYLE.php";
    include_once "controller/Akademie/Akademie.php";

    $BIContent = new Akademie();

    $BIContent->showBuchung_inhalt();

}

add_shortcode("shortcode_buchung_zielgruppe", "buchung_zielgruppe");

function buchung_zielgruppe()
{
    include_once "css/rootSTYLE.php";
    include_once("Sql/AkademieEvents/contentTargetGroup/loadTargetGroup.php");
    include_once "css/AkademieEvents/akademieEventsSTYLE.php";
    include_once "controller/Akademie/Akademie.php";

    $BZContent = new Akademie();

    $BZContent->showBuchung_zielgruppe();
}

add_shortcode("shortcode_buchung_voraussetzungen", "buchung_voraussetzungen");

function buchung_voraussetzungen()
{
    include_once "css/rootSTYLE.php";
    include_once("Sql/AkademieEvents/contentRequirement/loadRequirement.php");
    include_once "css/AkademieEvents/akademieEventsSTYLE.php";
    include_once "controller/Akademie/Akademie.php";

    $BVContent = new Akademie();

    $BVContent->showBuchung_voraussetzungen();
}

add_shortcode("shortcode_buchung_button_zurBuchung", "buchung_button_zurBuchung");

function buchung_button_zurBuchung()
{
    include_once "css/rootSTYLE.php";
    include_once "css/btn.style.php";
    include_once "controller/Akademie/Akademie.php";

    $btnContent = new Akademie();

    $btnContent->showBuchung_button_zurBuchung();
}

add_shortcode("shortcode_information_teilnehmendePerson", "information_teilnehmendePerson");

function information_teilnehmendePerson()
{
    include_once "css/rootSTYLE.php";
    include_once "css/btn.style.php";
    include_once "css/AkademieEvents/akademieEventsSTYLE.php";
    include_once "css/formContainerSTYLE.php";
    include_once "view/Akademie/TeilnehmendePerson.php";
    include_once "controller/Akademie/Akademie.php";

    $TPContent = new Akademie();

    $TPContent->showInformation_teilnehmendePerson();
}
add_shortcode("shortcode_buchungsBestaetigung", "buchungsBestaetigung");

function buchungsBestaetigung()
{
    include_once "css/rootSTYLE.php";
    include_once "view/Akademie/BuchungText.php";
    include_once "css/AkademieEvents/akademieEventsSTYLE.php";

    $text = new BuchungText();

    echo $text->bookingConfirmed();
}

add_shortcode("sc_kommendeVeranstaltungen","kommendeVeranstaltungen");

function kommendeVeranstaltungen()
{
    echo "kommendeVeranstaltungen";
}

add_shortcode("sc_vergangeneVeranstaltungen","vergangeneVeranstaltungen");

function vergangeneVeranstaltungen()
{
    echo "vergangeneVeranstaltungen";
}
?>


