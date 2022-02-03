<?php

class headerPartTwo
{
    function showHeader($headline)
    {
        $headerBg = "<div class='headerPictureBg'>
                        <div class='headerHeadline'>
                            <a href=\"http://127.0.0.1/wordpress/\"><img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2022/02/IVU-Logo-Neu.png\" alt='IVU Logo' width=\"250\" height=\"400\"></a>
                        </div>
                        <button class='buttonHeader'>
                            <a href='http://127.0.0.1/wordpress/neue-supportanfrage/'>JETZT SUPPORTANFRAGE</a>
                        </button>
                     </div>";

        return $headerBg;
    }
}