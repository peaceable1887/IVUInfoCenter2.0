<?php

class Menu
{
    function showMenu()
    {
        $menu = "<div class='btnMenuContainer'>
            <div class='btnMenuSubContainer'>
            <a href=\"http://127.0.0.1/wordpress/meine-gebuchten-veranstaltungen/\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/10/akademie-bild.png\"><br>
                <span class='btnText'>Meine gebuchten Veranstaltungen</span>
                </button>
            </a>
            <a href=\"http://127.0.0.1/wordpress/akademie-events-uebersicht\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/10/akademie-bild.png\"><br>
                <span class='btnText'>Gesamte Kursübersicht</span>
                </button>
            </a>
            <a href=\"http://127.0.0.1/wordpress/downloads\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/10/akademie-bild.png\"><br>
                <span class='btnText'>Informationen und Downloads</span>
                </button>
            </a>
            </div><br>
            <div class='btnMenuSubContainer'>
            <a href=\"http://127.0.0.1/wordpress/hilfe\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/10/akademie-bild.png\"><br>
                <span class='btnText'>Inhouse Schulungen</span>
                </button>
            </a>
            <a href=\"http://127.0.0.1/wordpress/support-anfragen\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/10/akademie-bild.png\"><br>
                <span class='btnText'>Akademiekatalog</span>
                </button>
            </a>
            <a href=\"http://127.0.0.1/wordpress/infos\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/10/akademie-bild.png\"><br>
                <span class='btnText'>Terminblatt</span>
                </button>
            </a>
            </div>
          </div>";

        return $menu;
    }
}