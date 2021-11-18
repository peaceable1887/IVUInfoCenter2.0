<?php
/*
Plugin Name: Shortcodes: Download Center
Description: Stellt alle Funktionen für den Downloadsbereich zur Verfügung.
Version: 1.0.0
Author: Felix Hansmann
*/
session_start();

add_shortcode("shortcode_sortDownloads", "sortDownloads");

function sortDownloads()
{
    include("css/btn.style.php");
    include ("css/style.php");

    echo "<span style='font-size: 20px; font-family: \"roboto condensed\";'>Sortiere nach:</span>
           <form class=\"dropdown\" method='post' >
         <div class=\"dropdown\">
          <button class=\"dropbtn\">Datum</button>
          <div class=\"dropdown-content\">
            <input class='dropdownBtn' type=\"submit\" name=\"sortASC\" value=\"Aufsteigend\">
            <input class='dropdownBtn' type=\"submit\" name=\"sortDESC\" value=\"Absteigend\">
          </div></div>
        </form>";

    echo "
           <form class=\"dropdown\" method='post' >
         <div class=\"dropdown\">
          <button class=\"dropbtn\">Kategorie</button>
          <div class=\"dropdown-content\">
            <input class='dropdownBtn' type=\"submit\" name=\"sortByLoga\" value=\"LOGA\">
            <input class='dropdownBtn' type=\"submit\" name=\"sortByEnergy\" value=\"Ener:gy\">
            <input class='dropdownBtn' type=\"submit\" name=\"sortByCsTwo\" value=\"CS2\">
            <input class='dropdownBtn' type=\"submit\" name=\"sortByBelvis\" value=\"BelVis\">
            <input class='dropdownBtn' type=\"submit\" name=\"sortByChargeable\" value=\"Kostenpflichtige Tutorials\">
          </div></div>
        </form>";
}


add_shortcode("shortcode_downloadOverview", "showDownloadOverview");

function showDownloadOverview()
{
    include ("Database/ivu-dbCon.php");
    include ("css/style.php");
    include ("Sql/Downloads/downloadTable/loadTableContent.php");

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
    else if(isset($_POST['sortByLoga']))
    {
        $sqlStatement->sqlQuery_sortByLoga();
        $sql = $sqlStatement->sqlQuery_sortByLoga();
    }
    else if(isset($_POST['sortByEnergy']))
    {
        $sqlStatement->sqlQuery_sortByEnergy();
        $sql = $sqlStatement->sqlQuery_sortByEnergy();
    }
    else if(isset($_POST['sortByCsTwo']))
    {
        $sqlStatement->sqlQuery_sortByCsTwo();
        $sql = $sqlStatement->sqlQuery_sortByCsTwo();
    }
    else if(isset($_POST['sortByBelvis']))
    {
        $sqlStatement->sqlQuery_sortByBelvis();
        $sql = $sqlStatement->sqlQuery_sortByBelvis();
    }
    else if(isset($_POST['sortByChargeable']))
    {
        $sqlStatement->sqlQuery_sortByChargeable();
        $sql = $sqlStatement->sqlQuery_sortByChargeable();
    }
    else
     {
         $sqlStatement->sqlQuery_loadDownloadsDESC();
         $sql = $sqlStatement->sqlQuery_loadDownloadsDESC();
     }

    $sqlRes = mysqli_query($dbConTest, $sql);
    $countDownloads = mysqli_num_rows($sqlRes);
    $_SESSION["recordListDownload"] = $countDownloads;

    echo "<table  style='font-family: roboto condensed;font-size: 17px'>
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

        echo "<td style='padding: 10px 20px 10px 0;
        text-align: left;
        vertical-align: top;'>";
        echo utf8_encode($arCur["Download_Number"]);
        echo "</td>\n";

        echo "<td style='padding: 10px 20px 10px 0;
        text-align: left;
        vertical-align: top;'>\n";
        echo  $newDownloadDate;
        echo "</td>\n";

        echo "<td style='padding: 10px 20px 10px 0;
        text-align: left;
        vertical-align: top;'>\n";
        echo "<a id='linkDescription' href='http://127.0.0.1/wordpress/download-details/?downloadSite'".$i.">".utf8_encode($arCur["Download_Subject"])."</a>";
        echo "</td>\n";

        echo "<td style='padding: 10px 20px 10px 0;
        text-align: left;
        vertical-align: top;'>\n";
        echo utf8_encode($arCur["Field_Name"]);
        echo "</td>\n";

        echo "<td style='padding: 10px 20px 10px 0;
        text-align: left;
        vertical-align: top;'>\n";
        echo utf8_encode($arCur["Subfield_Name"]);
        echo "</td></a>\n";

        echo "</tr>\n";
    }

    echo "</table>\n";
}


