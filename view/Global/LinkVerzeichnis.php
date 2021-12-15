<?php

//links noch dynamsch gestalten....
class LinkVerzeichnis
{

    function settings()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/einstellungen/\">Einstellungen</a></div>";

        return $link;
    }

    function akademieStartseite()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/akademie-events/\">Akademie und Events</a></div>";

        return $link;
    }

    function akademieUebersicht()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/akademie-events/\">Akademie und Events</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-uebersicht/\">Gesamte Kursübersicht</a></div>";

        return $link;
    }

    function kursuebersicht()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/akademie-events/\">Akademie und Events</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-uebersicht/\">Gesamte Kursübersicht</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/\">Kurs buchen</a></div>";

        return $link;
    }
    function registrierung()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/akademie-events/\">Akademie und Events</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-uebersicht/\">Gesamte Kursübersicht</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/\">Kurs buchen</a></div>";

        return $link;
    }
    function buchungErfolgreich()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/akademie-events/\">Akademie und Events</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-uebersicht/\">Gesamte Kursübersicht</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/\">Kurs buchen</a>"." > ".
            "<a href=\"http://127.0.0.1/wordpress/akademie-events-buchung-schritt-3/\">Buchung erfolgreich</a></div>";

        return $link;
    }

    function downloadCenter()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/download-center/\">Download Center</a></div>";

        return $link;
    }
    function allDownloads()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/download-center/\">Download Center</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/downloads/\">Alle Downloads</a></div>";

        return $link;
    }
    function detailDownloads()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/download-center/\">Download Center</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/downloads/\">Alle Downloads</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/download-details/\">Download Details</a></div>";

        return $link;
    }

    function supportCenter()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/support-center/\">Support Center</a></div>";

        return $link;
    }
    function overviewSupportcall()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/support-center/\">Support Center</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/uebersicht-supportanfragen/\">Übersicht Supportanfragen</a></div>";

        return $link;
    }
    function newSupportcall()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/support-center/\">Support Center</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/neue-supportanfrage/\">Neue Supportanfrage</a></div>";

        return $link;
    }
    function extendSupportData()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/support-center/\">Support Center</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/daten-zur-supportanfrage-ergaenzen/\">Daten zur Supportanfrage ergänzen</a></div>";

        return $link;
    }

    function supportcallNumber()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/support-center/\">Support Center</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/support-anfrage-nummer/\">Supportanfrage Nummer</a></div>";

        return $link;
    }
    function hilfe()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/hilfe/\">Hilfe</a></div>";

        return $link;
    }
    function infos()
    {
        $link = "<div class='sdLink'><a href=\"http://127.0.0.1/wordpress/\">InfoCenter</a>". " > " .
            "<a href=\"http://127.0.0.1/wordpress/infos/\">Infos</a></div>";

        return $link;
    }
}