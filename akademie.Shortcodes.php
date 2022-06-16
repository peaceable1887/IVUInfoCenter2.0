<?php
/*
Plugin Name: Shortcode: Akademie und Eventbereich
Description: Stellt alle Funktionen für den Akademie und Eventbereich zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/
session_start();

add_shortcode("sc_test", "test");

function test()
{
    include_once "Database/ivu-dbCon.php";
    include_once "model/AkademieModel.php";
    include_once "view/AkademieView.php";

    $test = new AkademieView();

    $test->showEvent(date("Y-m-d"));
}

add_shortcode("sc_buttonsMenu", "buttonsMenu");

function buttonsMenu()
{
    include_once "css/root.style.php";
    include_once "css/btn.style.php";
    include_once "css/menu.style.php";
    include_once "view/Akademie/Menu.php";

    $menu = new Menu();

    echo $menu->showMenu();

}
//in Arbeit.....
add_shortcode("shortcode_sortByDateOrSubject", "sortByDateOrSubject");

function sortByDateOrSubject()
{
    include_once "css/root.style.php";
    include_once "css/btn.style.php";
    include_once "css/Global/global.style.php";
    include_once "css/Akademie/akademie.style.php";
    include_once "view/Akademie/Filter.php";

    $filter = new Filter();

    echo $filter->showFilter();

}

add_shortcode("sc_loadUpcommingEvents", "loadUpcommingEvents");

function loadUpcommingEvents()
{
    include_once "Database/ivu-dbCon.php";
    include_once "model/info_sem_event.php";
    include_once "controller/Akademie/Akademie.php";
    include_once "css/root.style.php";
    include_once "css/Akademie/akademie.style.php";
    include_once "css/table.style.php";
    include_once "Sql/Akademie/SelectQueryAkademie.php";

    $UEContent = new Akademie();

    $UEContent->showLoadUpcommingEvents(new SelectQueryAkademie());
}

//in Arbeit....
add_shortcode("sc_pageNumber", "pageNumber");

function pageNumber()
{
    include_once "css/root.style.php";
    include_once "css/Akademie/akademie.style.php";

    //noch unfertig und auslagern....
    echo "<div class='paginationContainer'>
            <span style='font-size: 16px; font-family: \"roboto condensed\"; margin-right: 10px;'>Seite</span>
          <div class=\"pagination\">            
            <a href=\"#\" class=\"active\">1</a>
           
          </div></div>";
}

add_shortcode("sc_showEventContent", "showEventContent");

function showEventContent()
{
    include_once "Database/ivu-dbCon.php";
    include_once "css/root.style.php";
    include_once "css/style.php";
    include_once "css/btn.style.php";
    include_once "css/Akademie/akademie.style.php";
    include_once "Sql/Akademie/SelectQueryAkademie.php";
    include_once "model/semTile.php";
    include_once "view/Akademie/SeminarDetails.php";
    include_once "controller/Akademie/Akademie.php";

    $eventContent = new Akademie();

    echo $eventContent->eventContent(new SelectQueryAkademie());
}

add_shortcode("shortcode_buchung_seminarBlock", "buchung_seminarBlock");

function buchung_seminarBlock()
{
    include_once "css/root.style.php";
    include_once "css/style.php";
    include_once "Sql/Akademie/SelectQueryAkademie.php";
    include_once "Database/ivu-dbCon.php";
    include_once "model/semTile.php";
    include_once "controller/Akademie/Akademie.php";

    $SBContent = new Akademie();

    echo $SBContent->showBuchung_seminarBlock(new SelectQueryAkademie());

}

add_shortcode("shortcode_buchung_button_zurBuchung", "buchung_button_zurBuchung");

function buchung_button_zurBuchung()
{
    include_once "css/root.style.php";
    include_once "css/btn.style.php";
    include_once "controller/Akademie/Akademie.php";

    $btnContent = new Akademie();

    $btnContent->showBuchung_button_zurBuchung();
}
add_shortcode("sc_eventRegisterBox", "eventRegisterBox");

function eventRegisterBox()
{
    include_once "css/root.style.php";
    include_once "css/btn.style.php";
    include_once "css/Akademie/akademie.style.php";
    include_once "css/form.style.php";
    include_once "view/Akademie/TeilnehmendePerson.php";
    include_once "controller/Akademie/Akademie.php";

    include_once "css/style.php";
    include_once "Sql/Akademie/SelectQueryAkademie.php";
    include_once "Database/ivu-dbCon.php";
    include_once "model/semTile.php";

    $eventBox = new TeilnehmendePerson();
    $SBContent = new Akademie();

    echo $eventBox->showEventBox($SBContent->showBuchung_seminarBlock(new SelectQueryAkademie()));

}

add_shortcode("shortcode_information_teilnehmendePerson", "information_teilnehmendePerson");

function information_teilnehmendePerson()
{
    include_once "css/root.style.php";
    include_once "css/btn.style.php";
    include_once "css/Akademie/akademie.style.php";
    include_once "css/form.style.php";
    include_once "view/Akademie/TeilnehmendePerson.php";
    include_once "controller/Akademie/Akademie.php";

    $TPContent = new Akademie();

    $TPContent->showInformation_teilnehmendePerson();
}
add_shortcode("shortcode_buchungsBestaetigung", "buchungsBestaetigung");

function buchungsBestaetigung()
{
    include_once "css/root.style.php";
    include_once "view/Akademie/BuchungText.php";
    include_once "css/Akademie/akademie.style.php";
    include_once "css/style.php";
    include_once "Sql/Akademie/SelectQueryAkademie.php";
    include_once "Database/ivu-dbCon.php";
    include_once "model/semTile.php";
    include_once "controller/Akademie/Akademie.php";

    $text = new BuchungText();
    $SBContent = new Akademie();

    echo $text->bookingConfirmed($SBContent->showBuchung_seminarBlock(new SelectQueryAkademie()));
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

add_shortcode("sc_infoAndDownloads","infoAndDownloads");

function infoAndDownloads()
{
    include_once "css/root.style.php";
    include_once "css/Akademie/akademie.style.php";
    include_once "view/Akademie/infoAndDownloads.php";

    $content = new infoAndDownloads();

    echo $content->showContent();

}
?>


