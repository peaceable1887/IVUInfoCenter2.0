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
    include_once "css/root.style.php";
    include_once "view/Global/LinkVerzeichnis.php";
    include_once "controller/Global/GlobalContent.php";

    $SDContent = new GlobalContent();

    $SDContent->showSiteDirection();
}
//noch überarbeiten...
/*add_shortcode("sc_userGreeting","userGreeting");

function userGreeting()
{
    include_once "css/root.style.php";
    include_once "controller/Global/GlobalContent.php";

    $greeting = new GlobalContent();

    $greeting->showUserGreeting();
}

add_shortcode("sc_editData", "editData");

function editData()
{
    include_once "css/root.style.php";
    include_once "controller/Global/GlobalContent.php";

    $editData = new GlobalContent();

    $editData->showUserData();
}

//noch überarbeiten....
add_shortcode("sc_logout", "logout");

function logout()
{
    include_once "css/root.style.php";
    include_once "controller/Global/GlobalContent.php";

    $logout = new GlobalContent();

    $logout->showLogout();
}
*/
add_shortcode("sc_headerTopProfilData", "headerTopProfilData");

function headerTopProfilData()
{
    include_once "css/root.style.php";
    include_once "css/Global/global.style.php";
    include_once "view/Global/HeaderTop.php";
    include_once "controller/Global/GlobalContent.php";

    $profilData = new headerTop();
    $globalContent = new GlobalContent();

    echo $profilData->ProfilData($globalContent->showUserGreeting(),$globalContent->showUserData(),$globalContent->showLogout());

}

add_shortcode("sc_headerPicture", "headerPicture");

function headerPicture()
{
    include_once "css/Global/global.style.php";
    include_once "css/btn.style.php";
    include_once "view/global/HeaderBottom.php";
    include_once "controller/Global/GlobalContent.php";

    $headline = new GlobalContent();

    $headerPartTwo = new headerBottom();
    echo $headerPartTwo->showHeader($headline->showHeadline());
}

/*add_shortcode("sc_headline", "headline");

function headline()
{
    include_once "controller/Global/GlobalContent.php";

    $headline = new GlobalContent();

    $headline->showHeadline();
}*/

add_shortcode("sc_subHeadline", "subHeadline");

function subHeadline()
{
    include_once "css/root.style.php";
    include_once "css/style.php";
    include_once "css/Global/global.style.php";
    include_once "controller/Global/GlobalContent.php";

    $subHeadline = new GlobalContent();

    $subHeadline->showSubheadline();
}

//Sortierfilter und Suchfeld

add_shortcode("sc_filterOptions","filterOptions");

function filterOptions()
{
    include_once "css/root.style.php";
    include_once "css/btn.style.php";
    include_once "css/style.php";
    include_once "css/Global/global.style.php";
    include_once "view/Global/GlobalFilter.php";

    $filter = new GlobalFilter();

    echo $filter->showSupportRequestFilter();
}



