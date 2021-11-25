<?php

class Filter
{
    function showFilter()
    {
        $filter = "<div class='selectFields'>
            <div class=\"dropdown\">
             <span style='font-size: 16px; font-family: \"roboto condensed\";'>Sortieren nach:</span>
            <button class=\"dropbtn\">Datum oder Fachbereich</button>
          <div class=\"dropdown-content\">
             <input class='dropdownBtn' type=\"submit\" name=\"sortASC\" value=\"Datum\">
             <input class='dropdownBtn' type=\"submit\" name=\"sortASC\" value=\"Fachbereich\">   
          </div ></div ></div>

          <div class='selectFields'><div class='searchField'>
              <span>&#x1F50E;&#xFE0E;</span> 
              <label for=\"suche\">Veranstaltung suchen</label> 
              <input type=\"search\" id=\"suche\" placeholder=\"Stichwort\">
              </div></div>";

        return $filter;
    }
}