<?php


class GlobalContent
{
    function showSiteDirection()
    {

        $linkDir = new LinkVerzeichnis();
        $localPort = "http://127.0.0.1";

        //links noch dynamisch gestalten....
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
            echo $linkDir->settings();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] === $links["akademie"]["akademieStartseite"])
        {
            echo $linkDir->akademieStartseite();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] === $links["akademie"]["akademieUebersicht"])
        {
            echo $linkDir->akademieUebersicht();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] === $links["akademie"]["kursuebersicht"])
        {
            echo $linkDir->kursuebersicht();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] === $links["akademie"]["registrierung"])
        {
            echo $linkDir->registrierung();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] === $links["akademie"]["buchungErfolgreich"])
        {
            echo $linkDir->buchungErfolgreich();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] === $links["downloads"])
        {
            echo $linkDir->downloads();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] === $links["supportanfrage"]["supportCenter"])
        {
            echo $linkDir->supportCenter();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] === $links["supportanfrage"]["overviewSupportcall"])
        {
            echo $linkDir->overviewSupportcall();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] === $links["supportanfrage"]["newSupportcall"])
        {
            echo $linkDir->newSupportcall();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] === $links["supportanfrage"]["extendSupportData"])
        {
            echo $linkDir->extendSupportData();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] === $links["supportanfrage"]["supportcallNumber"])
        {
            echo $linkDir->supportcallNumber();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] === $links["hilfe"])
        {
            echo $linkDir->hilfe();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] === $links["infos"])
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

}