<?php
/*
Plugin Name: Shortcodes: Startseite
Description: Stellt alle Funktionen für die Startseite zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/

add_shortcode("sc_btnSupportRequest","btnSupportRequest");

function btnSupportRequest()
{
    include_once ("css/buchung.php");

    $localPort = "http://127.0.0.1";
//button noch in variable speichern und auslagern
    if($localPort.$_SERVER['REQUEST_URI'] === "http://127.0.0.1/wordpress/")
    {
        echo "<button class='buttonConfirm' style='margin-top: 50px; width: 350px;'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events/")
    {
        echo "<button class='buttonConfirm' style='margin-top: 100px; width: 350px;background: transparent;
            border: none !important;
            font-size:0;'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events-uebersicht/")
    {
        echo "<button class='buttonConfirm' style='margin-top: 100px; width: 350px;background: transparent;
            border: none !important;
            font-size:0;'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/")
    {
        echo "<button class='buttonConfirm' style='margin-top: 100px; width: 350px;background: transparent;
            border: none !important;
            font-size:0;'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-2/")
    {
        echo "<button class='buttonConfirm' style='margin-top: 100px; width: 350px;background: transparent;
            border: none !important;
            font-size:0;'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-3/")
    {
        echo "<button class='buttonConfirm' style='margin-top: 100px; width: 350px;background: transparent;
            border: none !important;
            font-size:0;'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/einstellungen/")
    {
        echo "<button class='buttonConfirm' style='margin-top: 100px; width: 350px;background: transparent;
            border: none !important;
            font-size:0;'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/downloads/")
    {
        echo "<button class='buttonConfirm' style='margin-top: 100px; width: 350px;background: transparent;
            border: none !important;
            font-size:0;'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/hilfe/")
    {
        echo "<button class='buttonConfirm' style='margin-top: 100px; width: 350px;background: transparent;
            border: none !important;
            font-size:0;'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/support-anfragen/")
    {
        echo "<button class='buttonConfirm' style='margin-top: 100px; width: 350px;background: transparent;
            border: none !important;
            font-size:0;'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";
    }
    else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/infos/")
    {
        echo "<button class='buttonConfirm' style='margin-top: 100px; width: 350px;background: transparent;
            border: none !important;
            font-size:0;'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";
    }
    else
        {
            echo "<button class='buttonConfirm' style='margin-top: 100px; width: 350px;background: transparent;
            border: none !important;
            font-size:0;'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";
        }
}

add_shortcode("sc_PictureMenu", "pictureMenu");

function pictureMenu()
{
    /*echo "<div class='menuContainer' style='
  width:100%;
  display: flex;
  justify-content: center;'>
            <div class='menuPicture' style='float: left; height: 200px; width: 400px; margin: 10px'>
                <a href='http://127.0.0.1/wordpress/akademie-events/'>
                <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/10/akademie-bild.png'></a>
            </div>
            <div class='menuPicture' style='float: left; height: 200px; width: 400px; margin: 10px'>
                <a href='http://127.0.0.1/wordpress/akademie-events/'>
                <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/10/akademie-bild.png'></a>
            </div>";*/
}

add_shortcode("sc_sliderCurrentSeminare", "sc_sliderCurrentSeminare");

function sc_sliderCurrentSeminare()
{
    include_once "Database/ivu-dbCon.php";
    include_once "css/slider.php";
    include_once "css/buchung.php";
    include_once "model/AkademieEvents/semTile.php";
    include_once ("css/AkademieEvents/akademieEvents.php");
    include_once("Sql/AkademieEvents/tile/loadTileContent.php");

    $dbCon = new infoCenterDbCon();
    $sqlStatement = new loadTileContent();
    $currentDate = date("Y-m-d");

    $sql = $sqlStatement->tile_content($currentDate);
    $sqlRes = mysqli_query($dbCon, $sql);

    $recordCount = mysqli_num_rows($sqlRes);

    echo "<div class=\"slideshow-container\">";

    for ($i = 0;$i <= $recordCount ;$i++)
    {
        echo "<div class=\"mySlides fade\">";


        for ($x = 0;$x < 3 ;$x++)
        {
            $arCur = mysqli_fetch_array($sqlRes);

            $seminarName = utf8_encode($arCur["Seminar_Name"]);
            $startDate = utf8_encode($arCur["Event_StartDate"]);
            $startDateConvert = strtotime($startDate);
            $newStartDate = date("d.", $startDateConvert);
            $endDate = utf8_encode($arCur["Event_EndDate"]);
            $endDateConvert = strtotime($endDate);
            $newEndDate = date("d.m.Y", $endDateConvert);
            $fieldName = utf8_encode($arCur["Field_Name"]);
            $typeName = utf8_encode($arCur["Type_Name"]);

            $semTile = new semTile($fieldName, $seminarName, $newStartDate,
                $newEndDate, utf8_encode($arCur["Event_Location"]), $typeName, $x);//Funktioniert noch nicht ganz, werden immer die ersten 3 incrementiert

            echo $semTile->__toString();
        }
        echo"</div>";
    }
 echo" <a class=\"arrows prev\" onclick=\"plusSlides(-1)\"></a>
  <a class=\"arrows next\" onclick=\"plusSlides(1)\"></a>
  <button class='buttonConfirm' style='width: 350px;margin: 0;
  position: absolute;
  top: 90%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  background: rgba(183,42,55,0);
  border: solid 2px white;
  border-radius: 7px;'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/akademie-events-uebersicht/'>
                GESAMTE KURSÜBERSICHT</a></button>
</div>

<br>
";
    ?>
    <script>var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }</script><?php

}

add_shortcode("sc_buttonsStartseiteMenu", "buttonsStartseiteMenu");

function buttonsStartseiteMenu()
{
    include_once "css/btn.style.php";

    echo "<div class='btnMenuContainer'>
            <div class='btnMenuSubContainer'>
            <a href=\"http://127.0.0.1/wordpress/einstellungen/\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/10/akademie-bild.png\"><br>
                <span class='btnText'>Persönliche Daten</span>
                </button>
            </a>
            <a href=\"http://127.0.0.1/wordpress/akademie-events/\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/10/akademie-bild.png\"><br>
                <span class='btnText'>Akademie</span>
                </button>
            </a>
            <a href=\"http://127.0.0.1/wordpress/downloads\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/10/akademie-bild.png\"><br>
                <span class='btnText'>Downloads</span>
                </button>
            </a>
            </div><br>
            <div class='btnMenuSubContainer'>
            <a href=\"http://127.0.0.1/wordpress/hilfe\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/10/akademie-bild.png\"><br>
                <span class='btnText'>Hilfe</span>
                </button>
            </a>
            <a href=\"http://127.0.0.1/wordpress/support-center/\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/10/akademie-bild.png\"><br>
                <span class='btnText'>Supportanfragen</span>
                </button>
            </a>
            <a href=\"http://127.0.0.1/wordpress/infos\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/10/akademie-bild.png\"><br>
                <span class='btnText'>Infos</span>
                </button>
            </a>
            </div>
          </div>";

}