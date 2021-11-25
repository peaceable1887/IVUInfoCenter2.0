<?php


class Startseite
{
    function showBtnSupportRequest()
    {
        $btn = new ButtonSupportanfrage();
        $localPort = "http://127.0.0.1";

        if($localPort.$_SERVER['REQUEST_URI'] === "http://127.0.0.1/wordpress/")
        {
            echo $btn->showButton();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events/")
        {
            echo $btn->hideButton();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events-uebersicht/")
        {
            echo $btn->hideButton();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/")
        {
            echo $btn->hideButton();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-2/")
        {
            echo $btn->hideButton();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/akademie-events-buchung-schritt-3/")
        {
            echo $btn->hideButton();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/einstellungen/")
        {
            echo $btn->hideButton();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/downloads/")
        {
            echo $btn->hideButton();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/hilfe/")
        {
            echo $btn->hideButton();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/support-anfragen/")
        {
            echo $btn->hideButton();
        }
        else if($localPort.$_SERVER['REQUEST_URI'] ===  "http://127.0.0.1/wordpress/infos/")
        {
            echo $btn->hideButton();
        }
        else
        {
            echo $btn->hideButton();
        }
    }

    function show_sc_sliderCurrentSeminare()
    {

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
                <a href='http://127.0.0.1/wordpress/akademie-events-uebersicht/'>
                GESAMTE KURSÜBERSICHT</a></button>
</div>
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
            }
            // Slider: Bildwechsel in Sekundenintervallen
            function simpleSlides ()
            {
                let i;
                let slides = document.querySelectorAll(".mySlides");
                for (i = 0; i < slides.length; i++)
                {
                    slides[i].setAttribute("style","display:none");
                }
                count++;
                if (count > slides.length)
                {
                    count = 1;
                }
                slides[count-1].setAttribute("style","display:block");
                setTimeout(simpleSlides, 6000);
            }
        </script><?php

    }

}