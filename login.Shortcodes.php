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
    include_once ".gitignore.Sql/Login/SelectUserData.php";
    include_once "controller/Login/Login.php";

    $LoginContent = new Login();

    $LoginContent->showLogin(new SelectUserData());
}

add_shortcode("sc_notLoggedIn", "notLoggedIn");

function notLoggedIn()
{
    include_once "css/root.style.php";
    include_once "Database/ivu-dbCon.php";
    include_once ".gitignore.Sql/Login/SelectUserData.php";
    include_once ".gitignore.Sql/Einstellungen/SelectQueryEinstellungen.php";
    include_once "controller/Login/Login.php";

    $LoginSuccess = new Login();

    $LoginSuccess->showNotLoggedIn();

}


