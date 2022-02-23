<?php
/*
Plugin Name: Shortcode: Login
Description: Stellt den Login und alle dazugehörigen Funktionen zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/
session_start();

add_shortcode("sc_login", "login");

function login()
{
    include_once "css/root.style.php";
    include_once "Database/ivu-dbCon.php";
    include_once "Sql/Login/SelectUserData.php";
    include_once "controller/Login/Login.php";

    $LoginContent = new Login();

    $LoginContent->showLogin();
}

add_shortcode("sc_notLoggedIn", "notLoggedIn");

function notLoggedIn()
{
    include_once "css/root.style.php";
    include_once "Database/ivu-dbCon.php";
    include_once "Sql/Login/SelectUserData.php";
    include_once "Sql/Einstellungen/SelectQueryEinstellungen.php";
    include_once "controller/Login/Login.php";

    $LoginSuccess = new Login();

    $LoginSuccess->showNotLoggedIn();

}
//noch auslagern....
function encrypt($key, $string)
{
    $result = '';

    for ($i=0; $i<strlen($string); $i++)
    {
        $char		= substr($string, $i, 1);
        $keychar	= substr($key, ($i % strlen($key))-1, 1);
        $char		= chr(ord($char)+ord($keychar));
        $result	   .= $char;
    }
    return base64_encode($result);
}
