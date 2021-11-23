<?php
/*
Plugin Name: Shortcode: Global
Description: Stellt alle übergreifende Funktionen zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/
session_start();

add_shortcode("sc_siteDirection", "siteDirection");

function siteDirection()
{
    include_once "css/global/siteDirection.php";

    $localPort = "http://127.0.0.1";

    $links = array
    (
        "infoCenter" => "http://127.0.0.1/wordpress/",
        "settings" => "http://127.0.0.1/wordpress/einstellungen/",
        "akademie" => array
        (
           "akademieStartseite" => "http://127.0.0.1/wordpress/akademie-events/",
           "akademieUebersicht" => "http://127.0.0.1/wordpress/akademie-events-uebersicht/",
           "kursuebersicht" => "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/",
           "registrierung" => "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-2/",
           "buchungErfolgreich" => "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-3/",
        ),
        "supportanfrage" => array
        (
            "supportCenter" => "http://127.0.0.1/wordpress/support-center/",
            "overviewSupportcall" => "http://127.0.0.1/wordpress/uebersicht-supportanfragen/",
            "newSupportcall" => "http://127.0.0.1/wordpress/neue-supportanfrage/",
            "extendSupportData" => "http://127.0.0.1/wordpress/daten-zur-supportanfrage-ergaenzen/",
            "supportcallNumber" => "http://127.0.0.1/wordpress/support-anfrage-nummer/",
        ),
        "downloads" => "http://127.0.0.1/wordpress/downloads/",
        "hilfe" => "http://127.0.0.1/wordpress/hilfe/",
        "infos" => "http://127.0.0.1/wordpress/infos/",
    );

    if($localPort.$_SERVER['REQUEST_URI'] === $links["infoCenter"])
    {
        echo "";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["settings"])
    {
        echo "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/einstellungen/\">Einstellungen</a></div>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["akademie"]["akademieStartseite"])
    {
        echo "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/akademie-events/\">Akademie und Events</a></div>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["akademie"]["akademieUebersicht"])
    {
        echo "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/akademie-events/\">Akademie und Events</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-uebersicht/\">Gesamte Kursübersicht</a></div>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["akademie"]["kursuebersicht"])
    {
        echo "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/akademie-events/\">Akademie und Events</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/\">Kursübersicht HR in Zeiten der Digitalisierung</a></div>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["akademie"]["registrierung"])
    {
        echo "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/akademie-events/\">Akademie und Events</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/\">Kursübersicht HR in Zeiten der Digitalisierung</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-buchung-schritt-2/\">Registrierung</a></div>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["akademie"]["buchungErfolgreich"])
    {
        echo "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/akademie-events/\">Akademie und Events</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/\">Kursübersicht HR in Zeiten der Digitalisierung</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-buchung-schritt-2/\">Registrierung</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-buchung-schritt-3/\">Buchung erfolgreich</a></div>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["downloads"])
    {
        echo "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/downloads/\">Download Center</a></div>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["supportanfrage"]["supportCenter"])
    {
        echo "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/support-anfragen/\">Support Center</a></div>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["supportanfrage"]["overviewSupportcall"])
    {
        echo "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/support-anfragen/\">Support Center</a>". " > " .
    "<a href=\"http://127.0.0.1/wordpress/uebersicht-supportanfragen/\">Übersicht Supportanfragen</a></div>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["supportanfrage"]["newSupportcall"])
    {
        echo "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/support-center/\">Support Center</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/neue-supportanfrage/\">Neue Supportanfrage</a></div>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["supportanfrage"]["extendSupportData"])
    {
        echo "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/support-center/\">Support Center</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/daten-zur-supportanfrage-ergaenzen/\">Daten zur Supportanfrage ergänzen</a></div>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["supportanfrage"]["supportcallNumber"])
    {
        echo "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/support-center/\">Support Center</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/support-anfrage-nummer/\">Supportanfrage Nummer</a></div>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["hilfe"])
    {
        echo "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/hilfe/\">Hilfe</a></div>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["infos"])
    {
        echo "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/infos/\">Infos</a></div>";
    }
}

add_shortcode("sc_userGreeting","userGreeting");

function userGreeting()
{
    $userFirstname = $_SESSION["User_Firstname"];
    $welcome = "Hallo";

    echo "<div class='welcomeUser' style='float: left'>".$welcome." ".$userFirstname."</div><br>";
}
add_shortcode("sc_logout", "logout");
function logout()
{
    echo "<form method='post'><button name='logout'>Logout</button></form><br>";

    if(isset($_POST["logout"]))
    {
        session_destroy();
        echo "<html>
                <head>
                    <meta http-equiv=\"refresh\" content=\"1; URL=http://127.0.0.1/wordpress/login-test/\">
                </head>
              </html>";
    }
}

add_shortcode("sc_headline", "headline");

function headline()
{
    include_once "css/style.php";

    $localPort = "http://127.0.0.1";

    if($localPort.$_SERVER['REQUEST_URI'] === "http://127.0.0.1/wordpress/")
    {
        echo "<h1 style='font-family: \"roboto condensed\";'>INFOCENTER<br>IVU INFORMATIONSSYSTEME</h1>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events/")
    {
        echo "<h1 style='font-family: \"roboto condensed\"'>AKADEMIE UND EVENTS</h1>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events-uebersicht/")
    {
        echo "<h1 style='font-family: \"roboto condensed\"'>AKADEMIE UND EVENTS</h1>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/")
    {
        echo "<h1 style='font-family: \"roboto condensed\"'>AKADEMIE UND EVENTS</h1>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-2/")
    {
        echo "<h1 style='font-family: \"roboto condensed\"'>AKADEMIE UND EVENTS</h1>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-3/")
    {
        echo "<h1 style='font-family: \"roboto condensed\"'>AKADEMIE UND EVENTS</h1>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/einstellungen/")
    {
        echo "<h1 style='font-family: \"roboto condensed\"'>EINSTELLUNGEN</h1>";

    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/downloads/")
    {
        echo "<h1>DOWNLOAD CENTER</h1>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/hilfe/")
    {
        echo "<h1>HILFE UND INFOS</h1>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/support-anfragen/")
    {
        echo "<h1>SUPPORT CENTER</h1>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/infos/")
    {
        echo "<h1>INFORMATIONEN</h1>";
    }
    else
    {
        echo "<h1>AKADEMIE UND EVENTS</h1>";
    }
}

add_shortcode("sc_subHeadline", "subHeadline");

function subHeadline()
{
    //echo "hier kommt die SubHeadline hin";
}

//Sortierfilter und Suchfeld

add_shortcode("sc_filterOptions","filterOptions");

function filterOptions()
{
    include_once "css/btn.style.php";

    echo "<div class='filterOptions'>
              <div class='dropdown'>
                    <span class='filterText'>Sortieren nach:</span>
                    <button class='dropbtn'>Datum oder Fachbereich</button>
                     <div class='dropdown-content'>
                         <input class='dropdownBtn' type='submit' name='sortASC' value='Datum'>
                         <input class='dropdownBtn' type='submit' name='sortASC' value='Fachbereich'>   
                    </div>
              </div>
              <div class='searchField'>
                    <span>&#x1F50E;&#xFE0E;</span> 
                    <label for='suche'>Veranstaltung suchen</label> 
                    <input type='search' id='suche' placeholder='Stichwort'>
              </div>
          </div>";
}



