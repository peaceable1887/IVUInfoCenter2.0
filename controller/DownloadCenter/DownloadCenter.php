<?php


class DownloadCenter
{
    function showDownloadOverview()
    {
        $dbConTest = new infoCenterDbCon();
        $sqlStatement = new loadTableContent();

        //hardcodierung raus, noch dynamisch gestalten....

        if(isset($_POST['sortASC']))
        {
            $sqlStatement->sqlQuery_loadDownloadsASC();
            $sql = $sqlStatement->sqlQuery_loadDownloadsASC();
        }
        else if(isset($_POST['sortDESC']))
        {
            $sqlStatement->sqlQuery_loadDownloadsDESC();
            $sql = $sqlStatement->sqlQuery_loadDownloadsDESC();
        }
        else if(isset($_POST['sortCategory']))
        {
            $sqlStatement->sqlQuery_sortByCategory();
            $sql = $sqlStatement->sqlQuery_sortByCategory();
        }
        else
        {
            $sqlStatement->sqlQuery_loadDownloadsDESC();
            $sql = $sqlStatement->sqlQuery_loadDownloadsDESC();
        }

        $sqlRes = mysqli_query($dbConTest, $sql);
        $countDownloads = mysqli_num_rows($sqlRes);
        $_SESSION["recordListDownload"] = $countDownloads;

        echo "<table>
                <tr>
                <th>ID</th>
                <th>Datum</th>
                <th>Download</th>
                <th>Kategorie</th>
                <th>Subkategorie</th>
                <th>Details</th>
                </tr>";

        for ($i = 0;$i < $countDownloads;$i++)
        {
            $arCur = mysqli_fetch_array($sqlRes);
            $downloadDate = utf8_encode($arCur["Download_Date"]);
            $downloadDateConvert = strtotime($downloadDate);
            $newDownloadDate = date("d.m.Y",$downloadDateConvert);
            $_SESSION[$i."downlNumber"] = utf8_encode($arCur["Download_Number"]);

            echo "<tr>\n";

            echo "<td>";
            echo $_SESSION[$i."downlNumber"];
            echo "</td>\n";

            echo "<td>\n";
            echo  $newDownloadDate;
            echo "</td>\n";

            echo "<td>\n";
            echo utf8_encode($arCur["Download_Subject"]);
            echo "</td>\n";

            echo "<td>\n";
            echo utf8_encode($arCur["Field_Name"]);
            echo "</td>\n";

            echo "<td>\n";
            echo utf8_encode($arCur["Subfield_Name"]);
            echo "</td></a>\n";

            echo "<td>\n";
            echo "<a id='linkDescription' href='http://127.0.0.1/wordpress/download-details/?downl_id_".$i."'>
              <span class='btnMore'>Anzeigen</span></a>";
            echo "</td>\n";

            echo "</tr>\n";
        }

        echo "</table>\n";
    }

    function showDownloadContent()
    {
        //Anzahl der Termine
        $recordCount = $_SESSION["recordListDownload"];

        $dbCon = new infoCenterDbCon();
        $sqlContent = new downloadDetails();

        for($i = 0; $i < $recordCount; $i++)
        {
            if(isset($_GET["downl_id_".$i]))
            {
                $sqlRes = mysqli_query($dbCon, $sqlContent->sqlQuery_showDownloadDetails($_SESSION[$i."downlNumber"]));
                $arCur = mysqli_fetch_array($sqlRes);

                $downloadSubject = utf8_encode($arCur["Download_Subject"]);
                $downloadDate = utf8_encode($arCur["Download_Date"]);
                $downloadDateConvert = strtotime($downloadDate);
                $newDownloadDate = date("d.m.Y",$downloadDateConvert);
                $downloadNumber = utf8_encode($arCur["Download_Number"]);
                $fieldName = utf8_encode($arCur["Field_Name"]);
                $downloadDescription = utf8_encode($arCur["Download_Description"]);
                //nochmal nachsehen ob richtige Spalte
                $fileSize = utf8_encode($arCur["File_Size"]);

                break;
            }

        }
        mysqli_close($dbCon);

        $content = new downloadContent();

        echo $content->downloadContentDescription($downloadSubject,$newDownloadDate,
            $downloadNumber,$fieldName,$downloadDescription, $fileSize);
    }

}