<?php

class HeaderBottom
{
    function showHeader($headline)
    {
        $headerBg = "<div class='headerPictureBg'>
                        <div class='headerHeadline'>
                            <a href=\"http://127.0.0.1/wordpress/\">                          
                            <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2022/02/IVU-Logo-Neu.png\" alt='IVU Logo' width=\"230\" height=\"400\"></a>
                            <span class='headerSubheadline'>Informations Center</span>
                        </div>
                        <div class='btnHeaderContainer'>
               
                            <button class='buttonHeader'>
                                <a href='http://127.0.0.1/wordpress/neue-supportanfrage/'>JETZT SUPPORTANFRAGE</a>
                            </button>
                        </div>
                     </div>";

        return $headerBg;
    }
}