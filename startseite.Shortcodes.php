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
    include ("css/buchung.php");

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
    include "css/slider.php";
    include "css/buchung.php";

    echo " 
<div class=\"slideshow-container\">

 
  <div class=\"mySlides fade\">
   
    <!-- Inhalt fehlt noch -->
  </div>

  <div class=\"mySlides fade\">

    <!-- Inhalt fehlt noch -->
  </div>

  <div class=\"mySlides fade\">

    <!-- Inhalt fehlt noch -->
  </div>

  <a class=\"arrows prev\" onclick=\"plusSlides(-1)\"></a>
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

add_shortcode("sc_startseiteButtons", "startseiteButtons");

function startseiteButtons()
{
    include "css/startseite/startseite.php";

    echo "<p><button class='btnStartseite'>Click Me1</button></p>";
}