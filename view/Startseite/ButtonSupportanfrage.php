<?php

class ButtonSupportanfrage
{
    function showButton()
    {
        $btn = "<button class='buttonConfirm' style='margin-top: 50px; width: 350px;'>
                <a href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";

        return $btn;
    }
    function  hideButton()
    {
        $btn = "<button class='buttonConfirm' style='margin-top: 100px; width: 350px;background: transparent;
            border: none !important;
            font-size:0;'>
                <a href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";

        return $btn;
    }
}