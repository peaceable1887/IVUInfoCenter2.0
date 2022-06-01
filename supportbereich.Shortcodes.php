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
    include_once "css/root.style.php";
    include_once "css/btn.style.php";
    include_once "css/menu.style.php";
    include_once "view/Supportbereich/MenuSupportanfragen.php";
    include_once "css/Supportbereich/supportbereich.style.php";

    $menuSupportrequest = new MenuSupportanfragen();

    echo $menuSupportrequest->showMenu();
}

add_shortcode("sc_tableSupportCalls", "tableSupportCalls");

function tableSupportCalls()
{
    include_once "css/root.style.php";
    include_once "Database/ivu-dbCon.php";
    include_once "css/table.style.php";
    include_once "Sql/Supportbereich/SelectQuerySupportCalls.php";
    include_once "controller/Supportbereich/Supportbereich.php";

    $DCContent = new Supportbereich();

    $DCContent ->showTableSupportCalls(new SelectQuerySupportCalls());
}

add_shortcode("sc_supportRequestText", "supportRequestText");

function supportRequestText()
{
    include_once "view/Supportbereich/SupportCallTextContent.php";
    include_once "css/Supportbereich/supportbereich.style.php";

    $text = new supportCallTextContent();

    echo $text->infoText_newSupportRequest();
}

add_shortcode("sc_createSupportRequest", "createSupportRequest");

function createSupportRequest()
{
    include_once "Database/ivu-dbCon.php";
    include_once "Sql/Supportbereich/SelectQuerySupportCalls.php";;
    include_once "css/form.style.php";
    include_once "css/style.php";
    include_once "css/btn.style.php";
    include_once "css/Supportbereich/supportbereich.style.php";
    include_once "view/Supportbereich/ErstelleSupportanfrage.php";
    include_once "controller/Supportbereich/Supportbereich.php";

    $supportContent = new Supportbereich();
    echo $supportContent->show_createNewCallContent(new SelectQuerySupportCalls());

}

add_shortcode("sc_expandSupportRequest", "expandSupportRequest" );

function expandSupportRequest()
{
    include_once "css/form.style.php";
    include_once "css/style.php";
    include_once "css/btn.style.php";
    include_once "css/Supportbereich/supportbereich.style.php";
    include_once "view/Supportbereich/ErgaenzeSupportanfrage.php";

    $expandRequest = new ErgaenzeSupportanfrage();

    echo $expandRequest->showContent();

}

//nochmal nachsehen weshalb Divs aufeinmal verschoben....
add_shortcode("sc_supportRequestTicket", "supportRequestTicket" );

function supportRequestTicket()
{
    include_once "css/root.style.php";
    include_once "css/form.style.php";
    include_once "css/style.php";
    include_once "css/btn.style.php";
    include_once "css/Supportbereich/supportbereich.style.php";
    include_once "view/Supportbereich/TicketUebersicht.php";

    $ticketOverview = new TicketUebersicht();

    /*echo $ticketOverview->showContent(include('HTML/Supportbereich/overlays.php'));*/
}

add_shortcode("sc_ticketContent", "ticketContent");

function ticketContent()
{
    include_once "Database/ivu-dbCon.php";
    include_once "Sql/Supportbereich/SelectQuerySupportCalls.php";
    include_once "css/root.style.php";
    include_once "css/btn.style.php";
    include_once "css/style.php";
    include_once "css/form.style.php";
    include_once "css/Supportbereich/supportbereich.style.php";
    include_once "controller/Supportbereich/Supportbereich.php";
    include_once "view/Supportbereich/TicketUebersicht.php";
    include "OverlayContent/Supportbereich/overlays.php";

    $ticketContent = new Supportbereich();

    $ticketContent->showTicketContent(new SelectQuerySupportCalls());
}

add_shortcode("sc_ticketChat", "ticketChat");

function ticketChat()
{
    include_once "Database/ivu-dbCon.php";
    include_once "Sql/Supportbereich/SelectQuerySupportCalls.php";;
    include_once "css/root.style.php";
    include_once "css/btn.style.php";
    include_once "css/style.php";
    include_once "css/form.style.php";
    include_once "css/Supportbereich/supportbereich.style.php";
    include_once "controller/Supportbereich/Supportbereich.php";
    include_once "view/Supportbereich/TicketUebersicht.php";
    include "OverlayContent/Supportbereich/overlays.php";

    $ticketChat = new Supportbereich();

    $ticketChat->showTicketChat(new SelectQuerySupportCalls());
}

//Übersicht Supportanfragen

add_shortcode("sc_menuSupportrequestOverview","menuSupportrequestOverview");

function menuSupportrequestOverview()
{
    include_once "css/root.style.php";
    include_once "css/btn.style.php";
    include_once "view/Supportbereich/MeineSupportanfragen.php";
    include_once "css/Supportbereich/supportbereich.style.php";

    $menu = new MeineSupportanfragen();

    echo $menu->showBtnMenu();
}


