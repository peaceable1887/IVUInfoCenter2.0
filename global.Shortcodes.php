<?php
/*
Plugin Name: Shortcode: Global
Description: Stellt alle übergreifende Funktionen zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/
session_start();

add_shortcode("sc_siteDirection", "siteDirection");

function siteDirection()
{
    include_once "css/rootSTYLE.php";
    include_once "css/global/siteDirectionSTYLE.php";
    include_once "view/Global/LinkVerzeichnis.php";
    include_once "controller/Global/GlobalContent.php";

    $SDContent = new GlobalContent();

    $SDContent->showSiteDirection();
}
//noch überarbeiten...
add_shortcode("sc_userGreeting","userGreeting");

function userGreeting()
{
    include_once "css/rootSTYLE.php";
    include_once "controller/Global/GlobalContent.php";

    $greeting = new GlobalContent();

    $greeting->showUserGreeting();
}
//noch überarbeiten....
add_shortcode("sc_logout", "logout");

function logout()
{
    include_once "css/rootSTYLE.php";
    include_once "controller/Global/GlobalContent.php";

    $logout = new GlobalContent();

    $logout->showLogout();
}

add_shortcode("sc_headline", "headline");

function headline()
{
    include_once "css/rootSTYLE.php";
    include_once "css/style.php";
    include_once "controller/Global/GlobalContent.php";

    $headline = new GlobalContent();

    $headline->showHeadline();
}

add_shortcode("sc_subHeadline", "subHeadline");

function subHeadline()
{
    //hier kommt die SubHeadline hin
}

//Sortierfilter und Suchfeld

add_shortcode("sc_filterOptions","filterOptions");

function filterOptions()
{
    include_once "css/rootSTYLE.php";
    include_once "css/btn.style.php";
    include_once "view/Global/GlobalFilter.php";

    $filter = new GlobalFilter();

    echo $filter->showFilter();
}



