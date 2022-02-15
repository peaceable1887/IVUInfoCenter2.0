<?php
/*
Plugin Name: Shortcodes: Supportbereich
Description: Stellt alle Funktionen für den Supportbereich zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/
session_start();

add_shortcode("sc_menuSupportrequest", "menuSupportrequest");

function menuSupportrequest()
{
    include_once "css/rootSTYLE.php";
    include_once("css/btn.style.php");
    include_once "css/menuSTYLE.php";
    include_once "view/Supportbereich/MenuSupportanfragen.php";

    $menuSupportrequest = new MenuSupportanfragen();

    echo $menuSupportrequest->showMenu();
}
add_shortcode("sc_supportRequestText", "supportRequestText");

function supportRequestText()
{
    include_once "view/Supportbereich/supportRequestTextContent.php";
    include_once "css/Supportbereich/supportRequestTextSTYLE.php";

    $text = new supportRequestTextContent();

    echo $text->infoText_newSupportRequest();
}

add_shortcode("sc_createSupportRequest", "createSupportRequest");

function createSupportRequest()
{
    include_once("css/formContainerSTYLE.php");
    include_once ("css/style.php");
    include_once "css/btn.style.php";
    include_once("css/Supportbereich/neueSupportanfrageSTYLE.php");
    include_once "view/Supportbereich/ErstelleSupportanfrage.php";

    $supportRequest = new ErstelleSupportanfrage();

    echo $supportRequest->showContent();

}

add_shortcode("sc_expandSupportRequest", "expandSupportRequest" );

function expandSupportRequest()
{
    include_once("css/formContainerSTYLE.php");
    include_once ("css/style.php");
    include_once "css/btn.style.php";
    include_once("css/Supportbereich/neueSupportanfrageSTYLE.php");
    include_once "view/Supportbereich/ErgaenzeSupportanfrage.php";

    $expandRequest = new ErgaenzeSupportanfrage();

    echo $expandRequest->showContent();

}

//nochmal nachsehen weshalb Divs aufeinmal verschoben....
add_shortcode("sc_supportRequestTicket", "supportRequestTicket" );

function supportRequestTicket()
{
    include_once "css/rootSTYLE.php";
    include_once "css/formContainerSTYLE.php";
    include_once "css/style.php";
    include_once "css/btn.style.php";
    include_once "css/Supportbereich/supportRequestTicketSTYLE.php";
    include_once "css/Supportbereich/supportbereich.style.php";
    include_once "view/Supportbereich/TicketUebersicht.php";

    $ticketOverview = new TicketUebersicht();

    /*echo $ticketOverview->showContent(include('HTML/Supportbereich/overlays.php'));*/
}

add_shortcode("sc_ticketContent", "ticketContent");

function ticketContent()
{
    include_once "Database/ivu-dbCon.php";
    include_once "Sql/Supportanfragen/supportCallQuerys.php";
    include_once "css/rootSTYLE.php";
    include_once "css/btn.style.php";
    include_once "css/style.php";
    include_once "css/formContainerSTYLE.php";
    include_once "css/Supportbereich/supportbereich.style.php";
    include_once "css/Supportbereich/supportRequestTicketSTYLE.php";
    include_once "controller/Supportbereich/Supportbereich.php";
    include_once "view/Supportbereich/TicketUebersicht.php";
    include "HTML/Supportbereich/overlays.php";

    $ticketContent = new Supportbereich();

    $ticketContent->showTicketContent(new infoCenterDbCon(), new supportCallQuerys());
}

add_shortcode("sc_ticketChat", "ticketChat");

function ticketChat()
{
    include_once "Database/ivu-dbCon.php";
    include_once "Sql/Supportanfragen/supportCallQuerys.php";
    include_once "css/rootSTYLE.php";
    include_once "css/btn.style.php";
    include_once "css/style.php";
    include_once "css/formContainerSTYLE.php";
    include_once "css/Supportbereich/supportbereich.style.php";
    include_once "css/Supportbereich/supportRequestTicketSTYLE.php";
    include_once "controller/Supportbereich/Supportbereich.php";
    include_once "view/Supportbereich/TicketUebersicht.php";
    include "HTML/Supportbereich/overlays.php";

    $ticketChat = new Supportbereich();

    $ticketChat->showTicketChat(new infoCenterDbCon(), new supportCallQuerys());
}

//Übersicht Supportanfragen

add_shortcode("sc_menuSupportrequestOverview","menuSupportrequestOverview");

function menuSupportrequestOverview()
{
    include_once "css/rootSTYLE.php";
    include_once "css/btn.style.php";
    include_once "view/Supportbereich/MeineSupportanfragen.php";

    $menu = new MeineSupportanfragen();

    echo $menu->showBtnMenu();
}


