<?php

class MenuDownloadCenter
{
    function showMenu()
    {
        $menuDownloadCenter = "<div class='btnMenuContainer'>
            <div class='btnMenuSubContainer'>
            <a href=\"http://127.0.0.1/wordpress/downloads/\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_237571411-scaled.jpeg\"><br>
                <span class='btnText'>Alle Downloads</span>
                </button>
            </a>
            <a href=\"http://127.0.0.1/wordpress/akademie-events/\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_263755089-scaled.jpeg\"><br>
                <span class='btnText'>Meine Download</span>
                </button>
            </a>
            </div>
          </div>";

        return $menuDownloadCenter;
    }
}