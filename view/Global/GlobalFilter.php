<?php


class GlobalFilter
{
    function showSupportRequestFilter()
    {
        $content = " <form method='post'><div class='filterContainer'>
                        <div class='filterText'>
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" fill=\"currentColor\" class=\"bi bi-funnel\" viewBox=\"0 0 16 16\">
                        <path d=\"M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z\"/>
                        </svg> FILTER</div>
                        <div class='dropDown'>                       
                            <button class='dropDownBtn'>Status<span class='arrowDown'>&#129107;</span></button>
                            <div class='dropDownContent'>
                                <input class='dropDownBtn' type='submit' name='sortCategory' value='Meine offenen'><br>
                                <input class='dropDownBtn' type='submit' name='sortCategory' value='Unsere offenen'><br>
                                <input class='dropDownBtn' type='submit' name='sortCategory' value='Meine erledigten''><br>
                                <input class='dropDownBtn' type='submit' name='sortCategory' value='Unsere erledigten'><br>                                                                       
                            </div>                             
                        </div>    
                        <div class='dropDown'>
                            <button class='dropDownBtn'>Datum<span class='arrowDown'>&#129107;</span></button>
                            <div class='dropDownContent'>
                                <input class='dropDownBtn' type='submit' name='sortASC' value='Aufsteigend'><br>
                                <input class='dropDownBtn' type='submit' name='sortDESC' value='Absteigend'>            
                            </div>
                        </div>                                                         
                        <input class='searchField' type='search' placeholder='Suchen...'> 
                    </div></form>";

        return $content;


    }
}