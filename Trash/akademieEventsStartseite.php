<?php
/*
Plugin Name: AKADEMIE / EVENTS (Startseite)
Description: Test 3
Version: 1.0.0
Author: Felix Hansmann
*/

//WIRD WOHL NICHT GENUTZT !!!!

add_shortcode("susTable_shortcode", "dbQuery_sus");

function dbQuery_sus()
{
    include("Database/ivu-dbCon.php");
    include("main/AkademieEvents/tile/tile_picture.php");
    include("css/style.php");

    $dbCon = new infoCenterDbCon();
    $currentDate =  date("Y-m-d");

    $sql = "SELECT Seminar_Name, Field_Name, Event_StartDate, Event_EndDate, Type_Name, Seminar_Status
              FROM info_sem
              INNER JOIN info_sem_field ON info_sem_field.Field_ID = info_sem.Seminar_Field
              INNER JOIN info_sem_event ON info_sem_event.Event_Seminar = info_sem.Seminar_ID
              INNER JOIN info_sem_type ON info_sem_type.Type_ID = info_sem.Seminar_Type
              WHERE Event_StartDate >= '$currentDate' AND Seminar_Status = 1
              ORDER BY Event_StartDate ASC";

    
    $sqlRes = mysqli_query($dbCon, $sql);
    mysqli_close($dbCon);

    //Später wieder eingefügen!
    $recordCount = mysqli_num_rows($sqlRes);

    /*echo "<div id='seminarBlock' style='font-size: 18px; height: 170px; width: 250px; border: solid 1px black;float: left;'><p>Datum:</p>
          <p>Fachbereich:</p><p>Name:</p><p>Typ:</p></div>";
    echo "<div id='seminarBlock' style='font-size: 18px; height: 170px; width: 250px; border: solid 1px black;float: left; margin-left: 25px;'><p>Datum:</p>
          <p>Fachbereich:</p><p>Name:</p><p>Typ:</p></div>";
    echo "<div id='seminarBlock' style='font-size: 18px; height: 170px; width: 250px; border: solid 1px black;float: left; margin-left: 25px;'><p>Datum:</p>
          <p>Fachbereich1:</p><p>Name:</p><p>Typ:</p></div>";*/

    //zum testen mit 3
    for ($i = 0;$i < 3; $i++) {
        $arCur = mysqli_fetch_array($sqlRes);

        $seminarName = utf8_encode($arCur["Seminar_Name"]);
        $startDate = utf8_encode($arCur["Event_StartDate"]);
        $startDateConvert = strtotime($startDate);
        $newStartDate = date("d.",$startDateConvert);
        $endDate = utf8_encode($arCur["Event_EndDate"]);
        $endDateConvert = strtotime($endDate);
        $newEndDate = date("d.m.Y",$endDateConvert);

        if(strlen($seminarName) > 15 )
        {
            $seminarName = substr($seminarName, 0, 20)."...";

            $fieldTest = new tile_picture();
            $fieldTest->tile_picture_comp($arCur["Field_Name"]);
            $fieldPicture = $fieldTest->tile_picture_comp($arCur["Field_Name"]);

            echo "<tr>\n";

            echo "<a id='linkDescription' href='http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/?linkDescription".$i."'><div id='seminarBlock'><p class='seminarBlockText'>Datum: ";
            echo "<div class='seminarBlockTextVar'>".$newStartDate."-".$newEndDate."</div>";
            echo "</p><p class='seminarBlockText'>Fachbereich: </p>$fieldPicture<div class='seminarBlockTextVar'></div>
                <br><p class='seminarBlockText'>Name: ";
            echo "<div class='seminarBlockTextVar'>".$seminarName."</div>";
            echo "</p><p class='seminarBlockText'>Typ: ";
            echo "<div class='seminarBlockTextVar'>".utf8_encode($arCur["Type_Name"])."</div>";
            echo "</p></div></a>";

        }


    }

}
?>
