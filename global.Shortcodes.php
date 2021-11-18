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
        "supportCenter" => "http://127.0.0.1/wordpress/support-center/",
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
        echo "<a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/einstellungen/\">Einstellungen</a>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["akademie"]["akademieStartseite"])
    {
        echo "<a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/akademie-events/\">Akademie und Events</a>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["downloads"])
    {
        echo "<a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/downloads/\">Download Center</a>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["supportCenter"])
    {
        echo "<a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/support-anfragen/\">Support Center</a>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["hilfe"])
    {
        echo "<a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/hilfe/\">Hilfe</a>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] === $links["infos"])
    {
        echo "<a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/infos/\">Infos</a>";
    }
}

function linkCollection()
{
    $links = array
    (
        "infoCenter" => "http://127.0.0.1/wordpress/",
        "settings" => "http://127.0.0.1/wordpress/einstellungen/",
        "supportCenter" => "http://127.0.0.1/wordpress/support-center/",
        "downloads" => "http://127.0.0.1/wordpress/downloads/",
        "hilfe" => "http://127.0.0.1/wordpress/hilfe/",
        "infos" => "http://127.0.0.1/wordpress/infos/",
    );

    return $links;

}
add_shortcode("sc_userGreeting","userGreeting");

function userGreeting()
{
    $userFirstname = $_SESSION["User_Firstname"];
    $welcome = "Hallo";

    echo "<div class='welcomeUser' style='float: left'>".$welcome." ".$userFirstname."</div><br>";
}

add_shortcode("sc_headline", "headline");

function headline()
{
    include "css/style.php";

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
    include "css/btn.style.php";

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





