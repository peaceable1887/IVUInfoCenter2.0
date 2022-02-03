<?php

class MenuDownloadCenter
{
    function showMenu()
    {
        $menuDownloadCenter = "<div class=\"menu\">
                    <a href='http://127.0.0.1/wordpress/downloads/' class=\"btnMenu\">
                        <div class=\"btnMenuImg\">
                            <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_237571411-scaled.jpeg'>
                        </div>
                        <span class=\"btnMenuText\">Alle Downloads</span>
                    </a>
                    <a href='http://127.0.0.1/wordpress/akademie-events/' class=\"btnMenu\">
                        <div class=\"btnMenuImg\">
                             <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/11/AdobeStock_263755089-scaled.jpeg'>
                        </div>
                        <span class=\"btnMenuText\">Meine Download</span>
                    </a>              
                    </div>";

        return $menuDownloadCenter;
    }
}