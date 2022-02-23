<?php
/*
Plugin Name: Shortcodes: Download Center
Description: Stellt alle Funktionen für den Downloadsbereich zur Verfügung.
Version: 1.0.0
Author: Felix Hansmann
*/
session_start();

add_shortcode("sc_menuDownloadCenter", "menuDownloadCenter");

function menuDownloadCenter()
{
    include_once "css/root.style.php";
    include_once "css/btn.style.php";
    include_once "css/menu.style.php";
    include_once "view/DownloadCenter/MenuDownloadCenter.php";

    $menu = new MenuDownloadCenter();

    echo $menu->showMenu();
}

add_shortcode("shortcode_sortDownloads", "sortDownloads");

function sortDownloads()
{
    include_once "css/root.style.php";
    include_once "css/btn.style.php";
    include_once "css/style.php";
    include_once "css/Global/global.style.php";
    include_once "view/DownloadCenter/DownloadFilter.php";

    $downloadFilter = new DownloadFilter();
    //noch unfertig
    echo $downloadFilter->testshowSortDownloads();

}
add_shortcode("shortcode_downloadOverview", "downloadOverview");

function downloadOverview()
{
    include_once "css/root.style.php";
    include_once "Database/ivu-dbCon.php";
    include_once "css/table.style.php";
    include_once "css/style.php";
    include_once "css/Global/global.style.php";
    include_once "Sql/DownloadCenter/SelectQueryDownloadCenter.php";
    include_once "controller/DownloadCenter/DownloadCenter.php";

    $downloadOverview = new DownloadCenter();

    $downloadOverview->showDownloadOverview(new infoCenterDbCon(),new SelectQueryDownloadCenter());
}


add_shortcode("sc_downloadContent", "downloadContent");

function downloadContent()
{
    include_once "css/root.style.php";
    include_once "css/DownloadCenter/downloadContent.style.php";
    include_once "css/btn.style.php";
    include_once "view/DownloadCenter/DownloadContent.php";
    include_once "Database/ivu-dbCon.php";
    include_once "Sql/DownloadCenter/SelectQueryDownloadCenter.php";
    include_once "controller/DownloadCenter/DownloadCenter.php";

    $DLContent = new DownloadCenter();

    $DLContent ->showDownloadContent(new infoCenterDbCon(),new SelectQueryDownloadCenter());
}


