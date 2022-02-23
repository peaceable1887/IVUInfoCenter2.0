<?php


class DownloadCenter
{
    function showDownloadOverview($dbCon, $sqlStm)
    {
        //hardcodierung raus, noch dynamisch gestalten....

        if(isset($_POST['sortASC']))
        {
            $sqlStm->sqlQuery_loadDownloadsASC();
            $sql = $sqlStm->sqlQuery_loadDownloadsASC();
        }
        else if(isset($_POST['sortDESC']))
        {
            $sqlStm->sqlQuery_loadDownloadsDESC();
            $sql = $sqlStm->sqlQuery_loadDownloadsDESC();
        }
        else if(isset($_POST['sortCategory']))
        {
            $sqlStm->sqlQuery_sortByCategory();
            $sql = $sqlStm->sqlQuery_sortByCategory();
        }
        else
        {
            $sqlStm->sqlQuery_loadDownloadsDESC();
            $sql = $sqlStm->sqlQuery_loadDownloadsDESC();
        }

        $sqlRes = mysqli_query($dbCon, $sql);
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
            $_SESSION[$i."download_ID"] = utf8_encode($arCur["Download_ID"]);

            echo "<tr>\n";

            echo "<td>";
            echo utf8_encode($arCur["Download_Number"]);
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

    function showDownloadContent($dbCon, $sqlStm)
    {
        //Anzahl der Termine
        $recordCount = $_SESSION["recordListDownload"];

        for($i = 0; $i < $recordCount; $i++)
        {
            if(isset($_GET["downl_id_".$i]))
            {
                $sqlRes = mysqli_query($dbCon, $sqlStm->sqlQuery_showDownloadDetails($_SESSION[$i."download_ID"]));
                $arCur = mysqli_fetch_array($sqlRes);

                $downloadSubject = utf8_encode($arCur["Download_Subject"]);
                $downloadDate = utf8_encode($arCur["Download_Date"]);
                $downloadDateConvert = strtotime($downloadDate);
                $newDownloadDate = date("d.m.Y",$downloadDateConvert);
                $downloadNumber = utf8_encode($arCur["Download_Number"]);
                $userFirstname = utf8_encode($arCur["User_Firstname"]);
                $userSurname = utf8_encode($arCur["User_Surname"]);
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
            $downloadNumber,$userFirstname,$userSurname, $fieldName,$downloadDescription, $fileSize);
    }

}