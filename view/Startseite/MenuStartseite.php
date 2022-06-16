<?php
class MenuStartseite
{
    function showMenu()
    {
        $menuStartseite = "<div class=\"menu\">
                    <a href='http://127.0.0.1/wordpress/einstellungen/' class=\"btnMenu\">
                        <div class=\"btnMenuImg\">
                            <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_323758288-scaled.jpeg'>
                        </div>
                        <span class=\"btnMenuText\">Persönliche Daten</span>
                    </a>
                    <a href='http://127.0.0.1/wordpress/akademie-events/' class=\"btnMenu\">
                        <div class=\"btnMenuImg\">
                             <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_308894169-scaled.jpeg'>
                        </div>
                        <span class=\"btnMenuText\">Akademie</span>
                    </a>
                    <a href='http://127.0.0.1/wordpress/download-center/' class=\"btnMenu\">
                        <div class=\"btnMenuImg\">
                             <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_303970510-scaled.jpeg'>
                        </div>
                        <span class=\"btnMenuText\">Downloads</span>
                    </a>                    
                    </div>
                    <div class=\"menu\">
                    <a href='http://127.0.0.1/wordpress/hilfe/' class=\"btnMenu\">
                        <div class=\"btnMenuImg\">
                             <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/11/menschen_vonOben-scaled.jpg'>
                        </div>
                        <span class=\"btnMenuText\">Hilfe und Infos</span>
                    </a>
                    <a href='http://127.0.0.1/wordpress/support-center/' class=\"btnMenu\">
                        <div class=\"btnMenuImg\">
                             <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_390554217-scaled.jpeg'>
                        </div>
                        <span class=\"btnMenuText\">Supportanfragen</span>
                    </a>
                    <a href='' class=\"btnMenu\">
                        <div class=\"btnMenuImg\">
                              <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/11/dinner_MP.jpg'>
                        </div>
                        <span class=\"btnMenuText\">Entwicklungspartnerschaft</span>
                    </a>                    
                    </div>";

        return $menuStartseite;
    }

}
