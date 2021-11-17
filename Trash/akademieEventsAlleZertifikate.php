<?php
/*
Plugin Name: AKADEMIE / EVENTS (Meine Zertifikate)
Description: .....
Version: 1.0.0
Author: Felix Hansmann
*/
add_shortcode("shortcode_alleZertifikate", "dbQuery_alleZertifikate");

function dbQuery_alleZertifikate()
{
    include("Database/dbCon.php");

    $dbCon = new dbCon();

    $sql = "SELECT nummer, name, ort, dauer, termin, kursinhalt, zielgruppe FROM sus_verwaltung";
    $sqlRes = mysqli_query($dbCon, $sql);
    mysqli_close($dbCon);

    //Später wieder eingefügen!
    $recordCount = mysqli_num_rows($sqlRes);

    echo "<table style='font-family: roboto condensed; font-size: 17px''>\n";
    echo "<tr>\n";
    echo "<th style='color: #b72a37; font-weight: bold;'>Datum</th>\n";
    echo "<th style='color: #b72a37; font-weight: bold;'>Name</th>\n";
    echo "<th style='color: #b72a37; font-weight: bold;'>Zertifikate</th>\n";
    echo "</td>\n";

    for ($i = 0;$i < $recordCount;$i++) {
        $arCur = mysqli_fetch_array($sqlRes);
        echo "<tr>\n";

        echo "<td>\n";
        echo utf8_encode($arCur["termin"]);
        echo "</td>\n";

        echo "<td>\n";
        echo utf8_encode($arCur["name"]);
        echo "</td>\n";

        echo "<td>\n";
        echo "<a href=''>Mehr</a>";
        echo "</td>\n";

        echo "</tr>\n";
    }

    echo "</table>\n";
}?>

