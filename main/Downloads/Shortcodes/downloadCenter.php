<?php

class downloadCenter
{
    public function __construct( $Object )
    {
        $shortcodeDownload = add_shortcode( 'shortcode_downloadOverview', array( $Object, 'showDownloadOverview' ) );
    }

}

class downloadView
{
    public function showDownloadOverview()
    {
        include("Sql/Downloads/downloadTable/loadTableContent.php");

        $dbCon = new infoCenterDbCon();
        $sqlStatement = new loadTableContent();

        $sqlStatement->sqlQuery_loadASC();
        $sql = $sqlStatement->sqlQuery_loadASC();

        $sqlRes = mysqli_query($dbCon, $sql);
        $countDownloads = mysqli_num_rows($sqlRes);

        echo "<table>
                <tr>
                <th style='color: #b72a37; font-weight: bold;'>ID</th>
                <th style='color: #b72a37; font-weight: bold;'>Datum</th>
                <th style='color: #b72a37; font-weight: bold;'>Download</th>
                <th style='color: #b72a37; font-weight: bold;'>Kategorie</th>
                <th style='color: #b72a37; font-weight: bold;'>Subkategorie</th>
                </tr>";

        for ($i = 0;$i < $countDownloads;$i++)
        {
            $arCur = mysqli_fetch_array($sqlRes);
            $downloadDate = utf8_encode($arCur["Download_Date"]);
            $downloadDateConvert = strtotime($downloadDate);
            $newDownloadDate = date("d.m.Y",$downloadDateConvert);

            echo "<tr>\n";

            echo "<td>\n";
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
            echo "</td>\n";

            echo "</tr>\n";
        }

        echo "</table>\n";
    }

}

$Customobject = new downloadView();
$Plugin = new downloadCenter($Customobject);






