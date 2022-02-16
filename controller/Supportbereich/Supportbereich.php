<?php


class Supportbereich
{
    function showTableDownloadCenter()
    {

        $dbCon = new infoCenterDbCon();
        $sqlStatement = new myCalls_query();

        $sql = $sqlStatement->myCompleted($_SESSION['userid']);
        $sqlRes = mysqli_query($dbCon, $sql);

        $countCalls = mysqli_num_rows($sqlRes);
        $_SESSION["recordSupportCalls"] = $countCalls;

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

        for ($i = 0;$i < $countCalls;$i++)
        {
            $arCur = mysqli_fetch_array($sqlRes);
            $_SESSION[$i."ticket_number"] = utf8_encode($arCur["Call_Number"]);

            echo "<tr>\n";

            echo "<td>\n";
            echo  $_SESSION[$i."ticket_number"];
            echo "</td>\n";

            echo "<td>\n";
            //aus dem DateConverter noch eine Klasse bauen
            $callDateReceived = utf8_encode($arCur["Call_Date_Received"]);
            $callDateReceivedConv = strtotime($callDateReceived);
            $newCallDateReceived = date("d.m.Y",$callDateReceivedConv);

            echo $newCallDateReceived;
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
            echo "<a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/?ticket_number_".$i."'>
              <span class='btnMore'>Anzeigen</span></a>";
            echo "</td>\n";

            echo "</tr>\n";
        }


        echo "</table>\n";

    }

    function showTicketContent($dbCon, $sqlStm)
    {
        //Anzahl der Termine
        $recordCount = $_SESSION["recordSupportCalls"];

        for($i = 0; $i < $recordCount; $i++)
        {
            if(isset($_GET["ticket_number_".$i]))
            {
                $sqlRes = mysqli_query($dbCon, $sqlStm->loadTicketContent($_SESSION[$i."ticket_number"]));
                $arCur = mysqli_fetch_array($sqlRes);

                $callNumber = utf8_encode($arCur["Call_Number"]);
                $callDate = utf8_encode($arCur["Call_Date_Received"]);
                $callDateConvert = strtotime($callDate);
                $newCallDate = date("d.m.Y",$callDateConvert);
                $statusName = utf8_encode($arCur["Status_Name"]);
                $fieldName = utf8_encode($arCur["Field_Name"]);
                $callSubject = utf8_encode($arCur["Call_Subject"]);
                $userFirst = utf8_encode($arCur["User_Firstname"]);
                $userSurname = utf8_encode($arCur["User_Surname"]);
                $priorityName = utf8_encode($arCur["Priority_Name"]);
                $categoryName = utf8_encode($arCur["Category_Name"]);
                $callDescription = utf8_encode($arCur["Call_Description"]);

            }

        }
        mysqli_close($dbCon);

        $content = new TicketUebersicht();

        echo $content->showContent($callNumber,$newCallDate,$fieldName,
            $statusName,$priorityName,$categoryName,$userFirst, $userSurname,$callSubject,$callDescription);


    }

    function showTicketChat($dbCon, $sqlStm)
    {

        $recordCount = $_SESSION["recordSupportCalls"];

        for($i = 0; $i < $recordCount; $i++)
        {
            $sqlRes = mysqli_query($dbCon, $sqlStm->loadTicketContent($_SESSION[$i."ticket_number"]));
            $arCur = mysqli_fetch_array($sqlRes);
            $_SESSION[$i."ticket_number"] = utf8_encode($arCur["Call_Number"]);

            if(isset($_GET["ticket_number_".$i]))
            {

                $sql = mysqli_query($dbCon, $sqlStm->loadTicketChat($_SESSION[$i."ticket_number"]));
                /*echo $_SESSION[$i."ticket_number"];*/

            }

        }
        mysqli_close($dbCon);
    }

}