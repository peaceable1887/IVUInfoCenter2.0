<?php
/*
Plugin Name: Shortcodes: Download Center
Description: Stellt alle Funktionen für den Downloadsbereich zur Verfügung.
Version: 1.0.0
Author: Felix Hansmann
*/
session_start();

add_shortcode("shortcode_sortDownloads", "sortDownloads");

function sortDownloads()
{
    include_once("css/btn.style.php");
    include_once ("css/style.php");
    include_once "view/DownloadCenter/DownloadFilter.php";

    $downloadFilter = new DownloadFilter();

    echo $downloadFilter->showSortDownloads();

}


add_shortcode("shortcode_downloadOverview", "downloadOverview");

function downloadOverview()
{
    include_once ("Database/ivu-dbCon.php");
    include_once ("css/style.php");
    include_once ("Sql/Downloads/downloadTable/loadTableContent.php");
    include_once "controller/DownloadCenter/DownloadCenter.php";

    $downloadOverview = new DownloadCenter();

    $downloadOverview->showDownloadOverview();
}


