<?php
/*
Plugin Name: Shortcode: Akademie und Eventbereich
Description: Stellt alle Funktionen für den Akademie und Eventbereich zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/
session_start();

add_shortcode("shortcode_sortByDateOrSubject", "sortByDateOrSubject");

function sortByDateOrSubject()
{
    include_once("css/btn.style.php");
    include_once("css/AkademieEvents/akademieEvents.php");

    echo "<div class='selectFields'>
            <div class=\"dropdown\">
             <span style='font-size: 16px; font-family: \"roboto condensed\";'>Sortieren nach:</span>
            <button class=\"dropbtn\">Datum oder Fachbereich</button>
          <div class=\"dropdown-content\">
             <input class='dropdownBtn' type=\"submit\" name=\"sortASC\" value=\"Datum\">
             <input class='dropdownBtn' type=\"submit\" name=\"sortASC\" value=\"Fachbereich\">   
          </div ></div ></div>";

    echo "<div class='selectFields'><div class='searchField'>
              <span>&#x1F50E;&#xFE0E;</span> 
              <label for=\"suche\">Veranstaltung suchen</label> 
              <input type=\"search\" id=\"suche\" placeholder=\"Stichwort\">
              </div></div>";
}

include ("model/AkademieEvents/info_sem_event.php");

add_shortcode("sc_loadUpcommingEvents", "loadUpcommingEvents");

function loadUpcommingEvents()
{
    include_once("Database/ivu-dbCon.php");
    include_once("css/AkademieEvents/akademieEvents.php");
    include_once("Sql/AkademieEvents/allEvents/sqlQueryAllEvents.php");

    $dbCon = new infoCenterDbCon();
    $sqlStatement = new sqlQueryAllEvents();
    $currentDate = date("Y-m-d");

    $sql = $sqlStatement->sqlQuery_loadASC($currentDate);
    $sqlRes = mysqli_query($dbCon, $sql);

    $recordCount = mysqli_num_rows($sqlRes);
    $_SESSION["recordList"] = $recordCount;

    echo "<table style='font-family: roboto condensed;font-size: 17px'>\n";
    echo "<tr>\n";
    echo "<th style='color: #b72a37; font-weight: bold;'>Datum</th>\n";
    echo "<th style='color: #b72a37; font-weight: bold;'>Ort</th>\n";
    echo "<th style='color: #b72a37; font-weight: bold;'>Fachbereich</th>\n";
    echo "<th style='color: #b72a37; font-weight: bold;'>Name</th>\n";
    echo "<th style='color: #b72a37; font-weight: bold;'>Details</th>\n";
    echo "</td>\n";

    for ($i = 0;$i < $recordCount;$i++)
    {
        $arCur = mysqli_fetch_array($sqlRes);
        $infoSemEvent = new info_sem_event();

        $infoSemEvent->setEventStartDate(utf8_encode($arCur["Event_StartDate"]));
        $newStartDate = date("d.",strtotime($infoSemEvent->Event_StartDate));
        $infoSemEvent->setEventEndDate(utf8_encode($arCur["Event_EndDate"]));
        $newEndDate = date("d.m.Y",strtotime($infoSemEvent->Event_EndDate));

        echo "<tr>\n";

        echo "<td>\n";
        echo $newStartDate."-".$newEndDate;
        echo "</td>\n";

        echo "<td>\n";
        echo utf8_encode($arCur["Event_Location"]);
        echo "</td>\n";

        echo "<td>\n";
        echo utf8_encode($arCur["Field_Name"]);
        echo "</td>\n";

        echo "<td>\n";
        echo utf8_encode($arCur["Seminar_Name"]);
        echo "</td>\n";

        echo "<td>\n";
        echo "<a id='linkDescription' href='http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/?linkDescription".$i."'>
              <span class='btnMore'>Mehr erfahren</span></a>";
        echo "</td>\n";

        echo "</tr>\n";
    }

    echo "</table>\n";

}

add_shortcode("sc_pageNumber", "pageNumber");

function pageNumber()
{
    include_once"css/AkademieEvents/akademieEvents.php";

    //noch unfertig!
    echo "<div class='paginationContainer'>
            <span style='font-size: 16px; font-family: \"roboto condensed\"; margin-right: 10px;'>Seite</span>
          <div class=\"pagination\">            
            <a href=\"#\" class=\"active\">1</a>
           
          </div></div>";
}

add_shortcode("shortcode_buchung_seminarBlock", "buchung_seminarBlock");

function buchung_seminarBlock()
{
    include_once("css/style.php");
    include_once("main/AkademieEvents/tile/tile_picture.php");
    include_once("Sql/AkademieEvents/tile/loadTileContent.php");
    include_once("Sql/AkademieEvents/allEvents/sqlQueryAllEvents.php");
    include_once("Database/ivu-dbCon.php");
    include_once"model/AkademieEvents/semTile.php";

    //Anzahl der Termine
    $recordCount = $_SESSION["recordList"];

    $dbCon = new infoCenterDbCon();
    $sqlContent = new loadTileContent();
    $currentDate = date("Y-m-d");

    for($i = 0; $i < $recordCount; $i++)
    {
        if(isset($_GET["linkDescription".$i]))
        {
            //Statement ggf. nochmal Überarbeiten. Fehler bei gleichen Datum...
            $sqlRes = mysqli_query($dbCon, $sqlContent->tile_content($currentDate));

            for($x = 0; $x < $i+1; $x++)
            {
                $arCur = mysqli_fetch_array($sqlRes);
                $arr[$x] = utf8_encode($arCur["Event_StartDate"]);
                //echo $arr[$i];
                $arr[$x] = utf8_encode($arCur["Field_Name"]);
                //echo $arr[$i];
                $arr[$x] = utf8_encode($arCur["Seminar_Name"]);
                //echo $arr[$i];
                $arr[$x] = utf8_encode($arCur["Type_Name"]);
                //echo $arr[$i];
            }

            $seminarName = utf8_encode($arCur["Seminar_Name"]);

            $startDate = utf8_encode($arCur["Event_StartDate"]);
            $startDateConvert = strtotime($startDate);
            $newStartDate = date("d.",$startDateConvert);

            $endDate = utf8_encode($arCur["Event_EndDate"]);
            $endDateConvert = strtotime($endDate);
            $newEndDate = date("d.m.Y",$endDateConvert);

            $fieldName = utf8_encode($arCur["Field_Name"]);
            $typeName = utf8_encode($arCur["Type_Name"]);

            $_SESSION["linkVarCount"] = $i;

            $semTile = new semTile($fieldName, $seminarName, $newStartDate,
                $newEndDate,utf8_encode($arCur["Event_Location"]), $typeName , $_SESSION["linkVarCount"]);



            echo $semTile->__toString();

        }

    }
    mysqli_close($dbCon);

}

add_shortcode("shortcode_buchung_beschreibung", "buchung_beschreibung");

function buchung_beschreibung()
{
    include_once("Sql/AkademieEvents/contentDescription/loadDescription.php");

    //Anzahl der Termine
    $recordCount = $_SESSION["recordList"];

    $dbCon = new infoCenterDbCon();
    $sqlDescription = new loadDescription();
    $currentDate = date("Y-m-d");

    for($i = 0; $i < $recordCount; $i++)
    {
        if(isset($_GET["linkDescription".$i]))
        {
            $sqlRes = mysqli_query($dbCon, $sqlDescription->content_description($currentDate));

            for($x = 0; $x < $i+1; $x++)
            {
                $arCur = mysqli_fetch_array($sqlRes);
                $arr[$x] = utf8_encode($arCur["Seminar_Description"]);
                echo "<span style=' font-family: \"roboto condensed\"; font-size: 17px'>".$arr[$i]."</span>";
            }

            mysqli_close($dbCon);
        }
    }

}

add_shortcode("shortcode_buchung_inhalt", "buchung_inhalt");

function buchung_inhalt()
{
    include_once("Sql/AkademieEvents/contentMatter/loadMatter.php");

    //Anzahl der Termine
    $recordCount = $_SESSION["recordList"];

    $dbCon = new infoCenterDbCon();
    $sqlMatter = new loadMatter();
    $currentDate = date("Y-m-d");

    for($i = 0; $i < $recordCount; $i++)
    {
        if(isset($_GET["linkDescription".$i]))
        {
            $sqlRes = mysqli_query($dbCon, $sqlMatter->content_matter($currentDate));

            for($x = 0; $x < $i+1; $x++)
            {
                $arCur = mysqli_fetch_array($sqlRes);
                $arr[$x] = utf8_encode($arCur["Seminar_Content"]);
                $teilung = explode(";",$arr[$i]);
                //echo $arr[$i];
                for($z = 0; $z <= substr_count($arr[$i], ";"); $z++)
                {
                    if(isset($arr[$i]))
                    {
                        echo "<img style='margin: 0 5px 3px 10px' src='http://127.0.0.1/wordpress/wp-content/uploads/2021/08/list-icon.png' width='12'>
                              <span style=' font-family: \"roboto condensed\"; font-size: 17px'>"
                            .$teilung[$z]."</span><br>";
                    }
                }
            }
            mysqli_close($dbCon);
        }
    }

}

add_shortcode("shortcode_buchung_zielgruppe", "buchung_zielgruppe");

function buchung_zielgruppe()
{
    include_once("Sql/AkademieEvents/contentTargetGroup/loadTargetGroup.php");

    //Anzahl der Termine
    $recordCount = $_SESSION["recordList"];

    $dbCon = new infoCenterDbCon();
    $sqlTargetGroup = new loadTargetGroup();
    $currentDate = date("Y-m-d");

    for($i = 0; $i < $recordCount; $i++)
    {
        if(isset($_GET["linkDescription".$i]))
        {
            $sqlRes = mysqli_query($dbCon, $sqlTargetGroup->targetGroup($currentDate));

            for($x = 0; $x < $i+1; $x++)
            {
                $arCur = mysqli_fetch_array($sqlRes);
                $arr[$x] = utf8_encode($arCur["Seminar_Target"]);
                echo "<span style=' font-family: \"roboto condensed\"; font-size: 17px'>".$arr[$i]."</span>";
            }

            mysqli_close($dbCon);
        }
    }

}

add_shortcode("shortcode_buchung_voraussetzungen", "buchung_voraussetzungen");

function buchung_voraussetzungen()
{
    include_once("Sql/AkademieEvents/contentRequirement/loadRequirement.php");

    //Anzahl der Termine
    $recordCount = $_SESSION["recordList"];

    $dbCon = new infoCenterDbCon();
    $sqlRequirement = new loadRequirement();
    $currentDate = date("Y-m-d");

    for($i = 0; $i < $recordCount; $i++)
    {
        if(isset($_GET["linkDescription".$i]))
        {

            $sqlRes = mysqli_query($dbCon, $sqlRequirement->requirement($currentDate));

            for($x = 0; $x < $i+1; $x++)
            {
                $arCur = mysqli_fetch_array($sqlRes);
                $arr[$x] = utf8_encode($arCur["Seminar_Premises"]);
                echo "<span style=' font-family: \"roboto condensed\"; font-size: 17px'>".$arr[$i]."</span>";
            }

            mysqli_close($dbCon);
        }
    }
}

add_shortcode("shortcode_buchung_button_zurBuchung", "buchung_button_zurBuchung");

function buchung_button_zurBuchung()
{
    include_once("css/buchung.php");

    //Anzahl der Termine
    $recordCount = $_SESSION["recordList"];
    for($i = 0; $i < $recordCount; $i++)
    {
        if(isset($_GET["linkDescription".$i]))
        {
            echo "<a id='linkDescription' href='http://127.0.0.1/wordpress/akademie-events-buchung-schritt-2/?linkDescription".$i."'
                ><button class='buttonConfirm' style='float: right' >
                REGISTRIEREN</button></a>";

        }
    }
}

add_shortcode("shortcode_information_teilnehmendePerson", "information_teilnehmendePerson");

function information_teilnehmendePerson()
{
    include_once("css/buchung.php");
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Funktion muss noch ausgelagert werden. -->
    <script>
        $(document).ready(function(){
            var maxField = 10;
            var addButton = $('.add_button');
            var wrapper = $('.field_wrapper');
            var fieldHTML = '<div><table id=\'formular\'>\n' +
                '                <tr>\n' +
                '                    <th>Vorname: <input class=\'formInput\' name=\'vorname\'></th>\n' +
                '                    <th>Name: <input class=\'formInput\' name=\'nachname\'></th>\n' +
                '                    <th>E-Mail: <input class=\'formInput\' name=\'email\'></th>' +
                '                     Teilnehmer | <a href="javascript:void(0);" class="remove_button">Entfernen</a>' +
                '                </tr>' +
                '              </table></div>';
            var x = 1;
            let countHTML = '<div>' + x + '</div>';

            $(addButton).click(function(){
                if(x < maxField){
                    x++;
                    $(wrapper).append(fieldHTML);
                }
            });

            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            });
        });
    </script>

    <?php
    $recordCount = $_SESSION["recordList"];
    for($i = 0; $i < $recordCount; $i++)
    {
        if(isset($_GET["linkDescription".$i]))
        {

            echo "<div class='formContainer'>
                <h5>Informationen zur teilnehmende Person</h5>
                <table id='formular'>
                <tr>
                    <th>Vorname: <input class='formInput' name='vorname' value='".$_SESSION["User_Firstname"]."'></th>
                    <th>Name: <input class='formInput' name='nachname' value='".$_SESSION["User_Surname"]."'></th>
                    <th>E-Mail: <input class='formInput' name='email' value='".$_SESSION["User_Email"]."'></th>
                </tr>
              </table>
               <div class=\"field_wrapper\">
                
                </div>
                <div class='addAttendees'><a href=\"javascript:void(0);\" class=\"add_button\" title=\"Add field\">
                        <p><span class='plusChar'>&#43   </span>weitere Teilnehmer hinzufügen</p></a></div>
              <span class='bemerkung'>Bemerkung:</span><textarea rows='4' cols='50' placeholder='Freitextfeld für z.B. abweichende Mailadresse für Bestätigung...'></textarea>";

            echo "<form style='font-size: 17px; font-family: \"roboto condensed\";'>
                <input type='checkbox' id='checkbox01'>
                <label for='checkbox01'> Ja, ich habe die Allgemeinen Richtlinien für Schulungen gelesen *</label><br>
                <input type='checkbox' id='checkbox02'>
                <label for='checkbox02'> Ja, ich melde die genannten teilnehmenden Personen verbindlich an *</label><br>
                <input type='checkbox' id='checkbox03'>
                <label for='checkbox03'> Ich habe die Informationen zum Datenschutz gelesen und bin damit einverstanden.*</label><br><br>
                <div class='btnDiv'><button class='buttonConfirm'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/akademie-events-buchung-schritt-3/?linkDescription".$i."'>
                Kostenplfichtig<br>buchen</a></button></div>
            </form></div>";

        }
    }
}
add_shortcode("shortcode_buchungsBestaetigung", "buchungsBestaetigung");
function buchungsBestaetigung()
{
    echo "<span style='font-size: 17px; font-family: \"roboto condensed\";'>Vielen Dank für Ihre Buchung. Wir haben eine automatisierte Bestätigung an Ihre hinterlegte Mailadresse gesendet.<br><br> 
Bei weniger als 5 Teilnehmern behält sich die IVU das Recht vor, eine Schulung bis spätestens 5 Arbeitstage vor Schulungsbeginn abzusagen. Stornierungen seitens des Kunden 5 Arbeitstage vor Schulungsbeginn sind kostenfrei.<br><br> 
Bei Rückfragen kontaktieren Sie uns bitte unter seminar@ivugmbh.de.</span>";

}

?>


