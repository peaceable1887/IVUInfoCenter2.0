<?php

class Startseite extends infoCenterDbCon
{
   /* function showBtnSupportRequest()
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
    }*/

    function show_sc_sliderCurrentSeminare($sqlStm)
    {
        $currentDate = date("Y-m-d");

        $sqlRes = $this->getMySqlQuery($this->dbCon(), $sqlStm->tile_content($currentDate));
        $recordCount = $this->getNumRows($sqlRes);

        echo "<div class='sliderContainer'><div class='sliderSemHeadline'>ANSTEHENDE VERANSTALTUNGEN</div>
                <div class=\"slideshow-container\">";

        for ($i = 0;$i <= $recordCount ;$i++)
        {
            echo "<div class=\"mySlides fade\">";

            for ($x = 0;$x < 3 ;$x++)
            {
                $arCur = $this->getFetchArray($sqlRes);

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
  <button class='buttonSlider'>
                <a href='http://127.0.0.1/wordpress/akademie-events-uebersicht/'>
                GESAMTE KURSÜBERSICHT</a></button>
</div></div>
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
                slides[slideIndex-1].style.display = "flex";
                dots[slideIndex-1].className += " active";
            }
            // Slider: Bildwechsel in Sekundenintervallen
            function simpleSlides ()
            {
                let i;
                let slides = document.querySelectorAll(".mySlides");
                for (i = 0; i < slides.length; i++)
                {
                    slides[i].setAttribute("style","display:flex");
                }
                count++;
                if (count > slides.length)
                {
                    count = 1;
                }
                slides[count-1].setAttribute("style","display:flex");
                setTimeout(simpleSlides, 6000);
            }
        </script><?php

    }
    /*Akutelle Informationen*/

   function show_sc_sliderCurrentInfos($sql)
    {
        $currentDate = date("Y-m-d");
        $sqlRes = $this->getMySqlQuery($this->dbCon(), $sql->tile_content($currentDate));
        $recordCount = $this->getNumRows($sqlRes);

        echo "<div class='mainDivInfos'><span class='sliderInfoHeadline'>AKTUELLES</span><div class=\"slideshow-containerInfos\">";

        for ($i = 0;$i <= $recordCount ;$i++)
        {
            echo "<div class=\"mySlidesInfos fadeInfos\">";


            for ($x = 0;$x < 3 ;$x++)
            {
                $semTile = new infoTile();//Funktioniert noch nicht ganz, werden immer die ersten 3 incrementiert

                echo $semTile->__toString();
            }
            echo"</div>";
        }
        echo" <a class=\"arrowsInfos prevInfos\" onclick=\"plusSlidesInfos(-1)\"></a>
  <a class=\"arrowsInfos nextInfos\" onclick=\"plusSlidesInfos(1)\"></a>
</div></div>
";
        ?>
        <script>var slideIndex = 1;
            showSlidesInfos(slideIndex);

            // Next/previous controls
            function plusSlidesInfos(n) {
                showSlidesInfos(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlideInfos(n) {
                showSlidesInfos(slideIndex = n);
            }

            function showSlidesInfos(n) {
                var i;
                var slides = document.getElementsByClassName("mySlidesInfos");
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
            function simpleSlidesInfos()
            {
                let i;
                let slides = document.querySelectorAll(".mySlidesInfos");
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
                setTimeout(simpleSlidesInfos, 6000);
            }
        </script><?php

    }

}