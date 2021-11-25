<?php


class DownloadFilter
{
    function showSortDownloads()
    {
        $content = "<span style='font-size: 20px; font-family: \"roboto condensed\";'>Sortiere nach:</span>
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

        return $content;
    }
}