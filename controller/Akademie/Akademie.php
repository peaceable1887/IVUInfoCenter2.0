<?php

class Akademie
{
    function showLoadUpcommingEvents()
    {
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
            $newStartDate = date("d.",strtotime($infoSemEvent->getEventStartDate()));
            $infoSemEvent->setEventEndDate(utf8_encode($arCur["Event_EndDate"]));
            $newEndDate = date("d.m.Y",strtotime($infoSemEvent->getEventEndDate()));

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

    function showBuchung_seminarBlock()
    {
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

                $fieldName = utf8_encode($arCur["Field_Name"]);
                $seminarName = utf8_encode($arCur["Seminar_Name"]);

                $startDate = utf8_encode($arCur["Event_StartDate"]);
                $startDateConvert = strtotime($startDate);
                $newStartDate = date("d.",$startDateConvert);

                $endDate = utf8_encode($arCur["Event_EndDate"]);
                $endDateConvert = strtotime($endDate);
                $newEndDate = date("d.m.Y",$endDateConvert);
                $typeName = utf8_encode($arCur["Type_Name"]);

                $_SESSION["linkVarCount"] = $i;

                $semTile = new semTile($fieldName, $seminarName, $newStartDate,
                    $newEndDate, utf8_encode($arCur["Event_Location"]), $typeName , $_SESSION["linkVarCount"]);

                echo $semTile->__toString();

            }

        }
        mysqli_close($dbCon);

    }

    function showBuchung_beschreibung()
    {
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

    function showBuchung_inhalt()
    {
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

    function showBuchung_zielgruppe()
    {
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

    function showBuchung_voraussetzungen()
    {

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

    function showBuchung_button_zurBuchung()
    {
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

    function showInformation_teilnehmendePerson()
    {
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
        $container = new TeilnehmendePerson();
        $recordCount = $_SESSION["recordList"];
        for($i = 0; $i < $recordCount; $i++)
        {
            if(isset($_GET["linkDescription".$i]))
            {
                echo $container->showRegister($_SESSION["User_Firstname"],$_SESSION["User_Surname"],$_SESSION["User_Email"],$i);

            }
        }
    }
}