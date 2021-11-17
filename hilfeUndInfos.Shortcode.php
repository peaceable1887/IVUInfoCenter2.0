<?php
/*
Plugin Name: Shortcodes: Hilfe und Infos
Description: Stellt alle Funktionen für Hilfe und Infos zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/

add_shortcode("sc_helpAndInfos", "helpAndInfos");

function helpAndInfos()
{
    include "css/Hilfe und Infos/helpAndInfos.php";

    echo "<div class='mainContainer'>
            <div class='infoText'><p>Die telefonische Hotline ist unter folgenden Nummern erreichbar (Wochentage + Uhrzeit)<p></div>
            <div class='infoTextNumber'><p>&#10142; Hotline Rufnummer: 040 / 30 98 30 - Durchwahl<p></div>
            <div class='callNumberCollections'>
                <div class='callEndNumber'>Rechenzentrum: - 00</div>
                <div class='callEndNumber'><b>ENER:GY / EDM</b><br>
                                            ENER:GY: - 26<br>
                                            EDM: - 29
                                            </div>
                <div class='callEndNumber'><b>Technischer Support</b><br>
                                            ORACLE: - 41<br>
                                            UNIX: - 42<br>
                                            Windows: - 43
                                            </div>
                <div class='callEndNumber'><b>Kaufmännische Module</b><br>
                                            CSA: - 25<br>
                                            CSF: - 22<br>
                                            CSE: - 27<br>
                                            CSL: - 27<br>
                                            CSP: - 27<br>
                                            CSV: - 27
                                            </div>
            </div>
          </div>";
}