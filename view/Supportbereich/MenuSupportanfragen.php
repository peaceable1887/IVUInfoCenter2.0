<?php

class MenuSupportanfragen
{
    function showMenu()
    {
        $menuSupportrequest = "<div class='btnMenuContainer'>
            <div class='btnMenuSubContainer'>
            <a href=\"http://127.0.0.1/wordpress/neue-supportanfrage/\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_237571411-scaled.jpeg\"><br>
                <span class='btnText'>Neue Supportanfrage</span>
                </button>
            </a>
            <a href=\"http://127.0.0.1/wordpress/uebersicht-supportanfragen/\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_263755089-scaled.jpeg\"><br>
                <span class='btnText'>Neue Supportanfrage</span>
                </button>
            </a>
            </div>
          </div>";

        return $menuSupportrequest;

    }
}