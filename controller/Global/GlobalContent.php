<?php


class GlobalContent
{
    function showSiteDirection()
    {

        $linkDir = new LinkVerzeichnis();
        $linkPatternDownl = "/\?d.*/";
        $linkPatternSem = "/\?l.*/";
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        //links noch dynamisch gestalten....
        $links = array
        (
            "infoCenter" => "http://127.0.0.1/wordpress/",
            "settings" => "http://127.0.0.1/wordpress/einstellungen/",
            "akademie" => array
            (
                "akademieStartseite" => "http://127.0.0.1/wordpress/akademie-events/",
                "akademieUebersicht" => "http://127.0.0.1/wordpress/akademie-events-uebersicht/",
                "kursuebersicht" => "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/$linkPatternSem",
                "registrierung" => "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-2/$linkPatternSem",
                "buchungErfolgreich" => "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-3/$linkPatternSem",
            ),
            "supportanfrage" => array
            (
                "supportCenter" => "http://127.0.0.1/wordpress/support-center/",
                "overviewSupportcall" => "http://127.0.0.1/wordpress/uebersicht-supportanfragen/",
                "newSupportcall" => "http://127.0.0.1/wordpress/neue-supportanfrage/",
                "extendSupportData" => "http://127.0.0.1/wordpress/daten-zur-supportanfrage-ergaenzen/",
                "supportcallNumber" => "http://127.0.0.1/wordpress/support-anfrage-nummer/",
            ),
            "downloads" => array
            (
                "downloadCenter" => "http://127.0.0.1/wordpress/download-center/",
                "alleDownloads" => "http://127.0.0.1/wordpress/downloads/",
                "detailDownloads" => "http://127.0.0.1/wordpress/download-details/$linkPatternDownl",
                "meineDownloads" => "http://127.0.0.1/wordpress/download-details/",
            ),

            "hilfe" => "http://127.0.0.1/wordpress/hilfe/",
            "infos" => "http://127.0.0.1/wordpress/infos/",
        );

        if($url === $links["infoCenter"])
        {
            echo "";
        }
        else if($url === $links["settings"])
        {
            echo $linkDir->settings();
        }
        else if($url === $links["akademie"]["akademieStartseite"])
        {
            echo $linkDir->akademieStartseite();
        }
        else if($url === $links["akademie"]["akademieUebersicht"])
        {
            echo $linkDir->akademieUebersicht();
        }
        else if(preg_match_all($linkPatternSem, $url))
        {
            echo $linkDir->kursuebersicht();
        }
        else if(preg_match_all($linkPatternSem, $url))
        {
            echo $linkDir->registrierung();
        }
        else if(preg_match_all($linkPatternSem, $url))
        {
            echo $linkDir->buchungErfolgreich();
        }
        else if($url === $links["downloads"]["downloadCenter"])
        {
            echo $linkDir->downloadCenter();
        }
        else if($url === $links["downloads"]["alleDownloads"])
        {
            echo $linkDir->allDownloads();
        }
        else if(preg_match_all($linkPatternDownl, $url))
        {
            echo $linkDir->detailDownloads();
        }
        else if($url === $links["supportanfrage"]["supportCenter"])
        {
            echo $linkDir->supportCenter();
        }
        else if($url === $links["supportanfrage"]["overviewSupportcall"])
        {
            echo $linkDir->overviewSupportcall();
        }
        else if($url === $links["supportanfrage"]["newSupportcall"])
        {
            echo $linkDir->newSupportcall();
        }
        else if($url === $links["supportanfrage"]["extendSupportData"])
        {
            echo $linkDir->extendSupportData();
        }
        else if($url === $links["supportanfrage"]["supportcallNumber"])
        {
            echo $linkDir->supportcallNumber();
        }
        else if($url === $links["hilfe"])
        {
            echo $linkDir->hilfe();
        }
        else if($url === $links["infos"])
        {
            echo $linkDir->infos();
        }
    }

    function showUserGreeting()
    {
        $userFirstname = $_SESSION["User_Firstname"];
        $welcome = "Hallo";

        echo "<div class='welcomeUser' style='float: left'>".$welcome." ".$userFirstname."</div>";
    }

    function showLogout()
    {
        echo "<form  method='post'><button style='background-color: rgb(0 0 0 / 0%);padding: 0;margin-left: 50px;text-decoration: underline;' name='logout'>Abmelden</button></form><br>";

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

    function showHeadline()
    {

        $linkPatternDownl = "/\?d.*/";
        $linkPatternSem = "/\?l.*/";
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if($url === "http://127.0.0.1/wordpress/")
        {
            echo "<h1 style='font-family: \"roboto condensed\";'>INFOCENTER<br>IVU INFORMATIONSSYSTEME</h1>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/akademie-events/")
        {
            echo "<h1 style='font-family: \"roboto condensed\"'>AKADEMIE UND EVENTS</h1>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/akademie-events-uebersicht/")
        {
            echo "<h1 style='font-family: \"roboto condensed\"'>AKADEMIE UND EVENTS</h1>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/")
        {
            echo "<h1 style='font-family: \"roboto condensed\"'>AKADEMIE UND EVENTS</h1>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-2/")
        {
            echo "<h1 style='font-family: \"roboto condensed\"'>AKADEMIE UND EVENTS</h1>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-3/")
        {
            echo "<h1 style='font-family: \"roboto condensed\"'>AKADEMIE UND EVENTS</h1>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/einstellungen/")
        {
            echo "<h1 style='font-family: \"roboto condensed\"'>EINSTELLUNGEN</h1>";

        }
        else if($url ===  "http://127.0.0.1/wordpress/download-center/")
        {
            echo "<h1>DOWNLOAD CENTER</h1>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/downloads/")
        {
            echo "<h1>DOWNLOAD CENTER</h1>";
        }
        else if(preg_match_all($linkPatternDownl, $url))
        {
            echo "<h1>DOWNLOAD CENTER</h1>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/hilfe/")
        {
            echo "<h1>HILFE UND INFOS</h1>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/support-anfragen/")
        {
            echo "<h1>SUPPORT CENTER</h1>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/infos/")
        {
            echo "<h1>INFORMATIONEN</h1>";
        }
        else
        {
            echo "<h1>AKADEMIE UND EVENTS</h1>";
        }
    }

    function showSubheadline()
    {

        $linkPatternDownl = "/\?d.*/";
        $linkPatternSem = "/\?l.*/";
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if($url === "http://127.0.0.1/wordpress/")
        {
            echo "<span class='subHeadline'>INFOCENTER<br>IVU INFORMATIONSSYSTEME</span>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/akademie-events/")
        {
            echo "<span class='subHeadline'>AKADEMIE UND EVENTS</span>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/akademie-events-uebersicht/")
        {
            echo "<span class='subHeadline'>Gesamte Kursübersicht</span>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/")
        {
            echo "<span class='subHeadline'>AKADEMIE UND EVENTS</span>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-2/")
        {
            echo "<span class='subHeadline'>AKADEMIE UND EVENTS</span>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-3/")
        {
            echo "<span class='subHeadline'>AKADEMIE UND EVENTS</span>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/meine-gebuchten-veranstaltungen/")
        {
            echo "<span class='subHeadline'>MEINE GEBUCHTEN VERANSTALTUNGEN UND EVENTS</span>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/einstellungen/")
        {
            echo "<span class='subHeadline'>Persönliche Daten</span>";

        }
        else if($url ===  "http://127.0.0.1/wordpress/downloads/")
        {
            echo "<span class='subHeadline'>Download Übersicht</span>";
        }
        else if(preg_match_all($linkPatternDownl, $url))
        {
            echo "<span class='subHeadline'>Download</span>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/hilfe/")
        {
            echo "<h5 class='subHeadline'>Hotline Nummern</h5>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/support-anfragen/")
        {
            echo "<span class='subHeadline'>SUPPORT CENTER</span>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/infos/")
        {
            echo "<span class='subHeadline'>INFORMATIONEN</span>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/uebersicht-supportanfragen/")
        {
            echo "<span class='subHeadline'>ÜBERSICHT SUPPORTANFRAGEN</span>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/neue-supportanfrage/")
        {
            echo "<span class='subHeadline'>NEUE SUPPORTANFRAGEN</span>";
        }
        else if($url ===  "http://127.0.0.1/wordpress/daten-zur-supportanfrage-ergaenzen/")
        {
            echo "<span class='subHeadline'>DATEN ZUR SPPORTANFRAGE ERGÄNZEN</span>";
        }
        else
        {
            echo "<span class='subHeadline'>AKADEMIE UND EVENTS</span>";
        }
    }
}