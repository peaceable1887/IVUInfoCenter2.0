<?php


class Supportbereich
{
    function showTableDownloadCenter()
    {

        $dbCon = new infoCenterDbCon();
        $sqlStatement = new myCalls_query();

        $sql = $sqlStatement->myCompleted($_SESSION['userid']);
        $sqlRes = mysqli_query($dbCon, $sql);

        $recordCount = mysqli_num_rows($sqlRes);

        echo "<table class='tableList'>\n";
        echo "<tr>\n";
        echo "<th>Nummer</th>\n";
        echo "<th>Datum</th>\n";
        echo "<th>Status</th>\n";
        echo "<th>Sachgebiet</th>\n";
        echo "<th>Betreff</th>\n";
        echo "<th>Mitarbeiter/-in</th>\n";
        echo "<th>Details</th>\n";
        echo "</td>\n";

        for ($i = 0;$i < $recordCount;$i++)
        {
            $arCur = mysqli_fetch_array($sqlRes);

            echo "<tr>\n";

            echo "<td>\n";
            echo  utf8_encode($arCur["Call_Number"]);
            echo "</td>\n";

            echo "<td>\n";
            echo utf8_encode($arCur["Call_Date_Received"]);
            echo "</td>\n";

            echo "<td>\n";
            echo utf8_encode($arCur["Status_Name"]);
            echo "</td>\n";

            echo "<td>\n";
            echo utf8_encode($arCur["Field_Name"]);
            echo "</td>\n";

            echo "<td>\n";
            echo utf8_encode($arCur["Call_Subject"]);
            echo "</td>\n";

            echo "<td>\n";
            echo utf8_encode($arCur["User_Surname"]);
            echo "</td>\n";

            echo "<td>\n";
            echo "<a id='linkDescription' href='?linkDescription".$i."'>
              <span class='btnMore'>Mehr erfahren</span></a>";
            echo "</td>\n";

            echo "</tr>\n";
        }


        echo "</table>\n";

    }
}