<?php
class MenuStartseite
{
    function showMenu()
    {
        $menuStartseite = "<div class='btnMenuContainer'>
            <div class='btnMenuSubContainer'>
            <a href=\"http://127.0.0.1/wordpress/einstellungen/\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_237571411-scaled.jpeg\"><br>
                <span class='btnText'>Persönliche Daten</span>
                </button>
            </a>
            <a href=\"http://127.0.0.1/wordpress/akademie-events/\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_263755089-scaled.jpeg\"><br>
                <span class='btnText'>Akademie</span>
                </button>
            </a>
            <a href=\"http://127.0.0.1/wordpress/download-center/\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_214202679-scaled.jpeg\"><br>
                <span class='btnText'>Downloads</span>
                </button>
            </a>
            </div><br>
            <div class='btnMenuSubContainer'>
            <a href=\"http://127.0.0.1/wordpress/hilfe\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/11/menschen_vonOben-scaled.jpg\"><br>
                <span class='btnText'>Hilfe und Infos</span>
                </button>
            </a>
            <a href=\"http://127.0.0.1/wordpress/support-center/\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_390554217-scaled.jpeg\"><br>
                <span class='btnText'>Supportanfragen</span>
                </button>
            </a>
            <a href=\"http://127.0.0.1/wordpress/infos\">
                <button>
                <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/11/dinner_MP.jpg\"><br>
                <span class='btnText'>Entwicklungspartnerschaft</span>
                </button>
            </a>
            </div>
          </div>";

        return $menuStartseite;
    }

}
