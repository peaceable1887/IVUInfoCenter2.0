<?php

class ButtonSupportanfrage
{
    function showButton()
    {
        $btn = "<button class='buttonHeader'>
                <a href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";

        return $btn;
    }
    function  hideButton()
    {
        $btn = "<button class='buttonHeaderHide'>
                <a href='http://127.0.0.1/wordpress/neue-supportanfrage/'>
                NEUE SUPPORTANFRAGE</a></button>";

        return $btn;
    }
}