<?php

class MenuSupportanfragen
{
    function showMenu()
    {
        $menuSupportrequest = "<div class=\"menu\">
                    <a href='http://127.0.0.1/wordpress/neue-supportanfrage/' class=\"btnMenu\">
                        <div class=\"btnMenuImg\">
                            <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_237571411-scaled.jpeg'>
                        </div>
                        <span class=\"btnMenuText\">Neue Supportanfrage</span>
                    </a>
                    <a href='http://127.0.0.1/wordpress/uebersicht-supportanfragen/' class=\"btnMenu\">
                        <div class=\"btnMenuImg\">
                             <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_263755089-scaled.jpeg'>
                        </div>
                        <span class=\"btnMenuText\">Übersicht Supportanfrage</span>
                    </a>              
                    </div>";

        return $menuSupportrequest;

    }
}