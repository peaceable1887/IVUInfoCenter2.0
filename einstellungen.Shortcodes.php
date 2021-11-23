<?php
/*
Plugin Name: Shortcodes: Einstellungen (Persönlicher Bereich)
Description: Stellt alle Funktionen für den Persönlichen Bereich zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/
session_start();

add_shortcode("sc_profilSettings", "profilSettings");

function profilSettings()
{
    include_once "css/buchung.php";
    include_once ("Database/ivu-dbCon.php");
    include_once ("Sql/Users/Login/loadUser.php");
    include_once ("Sql/Einstellungen/loadProfilData/loadProfilData.php");

    $dbCon = new infoCenterDbCon();
    $userData = new loadProfilData();
    $userid = $_SESSION['userid'];

    $sqlRes = mysqli_query($dbCon, $userData->loadData($userid));
    $arCur = mysqli_fetch_array($sqlRes);
    $_SESSION["User_Firstname"] = utf8_encode($arCur["User_Firstname"]);
    $_SESSION["User_Surname"] = utf8_encode($arCur["User_Surname"]);
    $_SESSION["User_Gender"] = utf8_encode($arCur["User_Gender"]);
    $_SESSION["User_Email"] = utf8_encode($arCur["User_Email"]);
    $_SESSION["User_Phone"] = utf8_encode($arCur["User_Phone"]);
    $_SESSION["User_Mobile"] = utf8_encode($arCur["User_Mobile"]);


    echo "<div class='formContainer'><details open>
            <summary style='color: #b72a37;'>Änderung Ihres Profils</summary>
            <table id='formular'>
                 <tr>
                    <th>Anrede*<br><input class='formInput' name='vorname' value='". $_SESSION["User_Gender"]."'></th>
                    <th></th>
                </tr>
                <tr>
                    <th>Vorname* <input class='formInput' name='vorname' value='".$_SESSION["User_Firstname"]."'></th>
                    <th>Nachname* <input class='formInput' name='nachname' value='".$_SESSION["User_Surname"]."'></th>
                </tr>
                <tr>
                    <th>Unternehmen* <input class='formInput' name='vorname' value=''></th>
                    <th>E-Mail* <input class='formInput' name='nachname' value='".$_SESSION["User_Email"]."'></th>
                </tr>
                <tr>
                    <th>Telefon*<br><input class='formInput' name='vorname' value='".$_SESSION["User_Phone"]."'></th>
                    <th>Mobiltelefon* <input class='formInput' name='nachname' value='".$_SESSION["User_Mobile"]."'></th>
                </tr>
                <tr>
                    <th>Abteilung* <input class='formInput' name='vorname' value=''></th>
                    <th>Funktion* <input class='formInput' name='nachname' value=''></th>
                </tr>
                <tr>
                    <th>Meine Supportanfragen vor meinen Kollegen verbergen</th>
                    <th><div class=\"dropdown\">
                            <div class=\"dropdown-content\">
                            <a href=\"#\">nein</a>
                            <a href=\"#\">ja</a>
                        </div>
                        </div>
                    </th>
                </tr>
              </table>
              <form style='font-size: 17px; font-family: \"roboto condensed\";'>
                <span><span style='font-weight: bold'>Hinweis:</span><br>Bitte füllen Sie möglichst alle Felder vollständig 
                aus und klicken dann auf „Daten speichern“. Die mit * gekennzeichneten<br> 
                      Felder sind Pflichtfelder.</span><br><br>
                <div class='btnDiv'><button class='buttonConfirm'>
                <a id='linkDescription' href=''>
                DATEN SPEICHERN</a></button></div>
            </form>
          </details></div>";

    echo "<div class='formContainer'><details>
            <summary style='color: #b72a37;'>Abweichende Anschrift zur Unternehmensadresse</summary>
            <table id='formular'>
                 <tr>
                    <th>Straße und Hausnummer<br><input class='formInput' name='vorname' value=''></th>
                    <th></th>
                </tr>
                <tr>
                    <th>Postleitzahl<input class='formInput' name='vorname' value=''></th>
                    <th>Ort<br><input class='formInput' name='nachname' value=''></th>
                </tr>
              </table>
              <form style='font-size: 17px; font-family: \"roboto condensed\";'>
                 <br><br>
                <div class='btnDiv'><button class='buttonConfirm'>
                <a id='linkDescription' href=''>
                DATEN SPEICHERN</a></button></div>
            </form>
          </details></div>";

    echo "<div class='formContainer'><details>
            <summary style='color: #b72a37;'>Meine Interessen</summary>
            <table id='formular' >
                 <tr>
                    <th style='border: hidden'>Welche Art von Informationen dürfen wir Ihnen zusenden?</th>
                    <th style='border: hidden'>Aus welchem unserer Fachbereiche möchten Sie die Informatio-<br>nen erhalten?</th>
                 </tr>
                <tr>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Newsletter (Allgemeine und bereichsübergreifende Informationen)</label></td>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Energieabrechnung</label></td>
                </tr>
                <tr>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Veranstaltungen (Kundentage, Messen)</label></td>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Technisches (Zählerwesen)</label></td>
                </tr>
                <tr>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Akademie (Seminare, Webinare)</label></td>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Marktkommunikation</label></td>
                </tr>
                <tr>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Downloads</label></td>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Wasserwirtschaft</label></td>
                </tr>
                <tr>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Quick Tipps</label></td>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Energiedatenmanagement</label></td>
                </tr>
                <tr>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Updates / Hotfix</label></td>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Finanzbuchhaltung, Controlling</label></td>
                </tr>
                <tr>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Kundenzeitschaft IVU Express</label></td>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Materialwirtschaft</label></td>
                </tr>
                <tr>
                    <td style='border: hidden'></td>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Messwesen</label></td>
                </tr>
                <tr>
                    <td style='border: hidden'></td>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Personalwesen</label></td>
                </tr>
                <tr>
                    <td style='border: hidden'></td>
                    <td style='border: hidden'><input type='checkbox' id='checkbox01'><label for='checkbox01'> Technik, EDV (Portale, Rechenzentrum)</label></td>
                </tr>
              </table>
              <form style='font-size: 17px; font-family: \"roboto condensed\";'>
                 <br><br>
                <div class='btnDiv'><button class='buttonConfirm'>
                <a id='linkDescription' href=''>
                DATEN SPEICHERN</a></button></div>
            </form>
          </details></div>";

    echo "<div class='formContainer'><details>
            <summary style='color: #b72a37;'>Änderung Ihrer Zugangsdaten</summary>
            <table id='formular'>
                 <tr>
                    <th>Benutzername*<br><input class='formInput' name='vorname' value=''></th>
                    <th></th>
                </tr>
                <tr>
                    <th>Ihr neues Kennwort*<input class='formInput' name='vorname' value=''></th>
                    <th>Kennwort wiederholen*<br><input class='formInput' name='nachname' value=''></th>
                </tr>
                <tr>
                    <th>Passwort-Sicherheit </th>
                </tr>
              </table>
              <span>Die Mindestlänge für Kennwörter beträgt 6 Zeichen. Variieren Sie Zahlen mit Klein- und Großbuchstaben für eine<br>
                    möglichst hohe Sicherheit</span>
              <form style='font-size: 17px; font-family: \"roboto condensed\";'>
                 <br><br>
                <div class='btnDiv'><button class='buttonConfirm'>
                <a id='linkDescription' href=''>
                DATEN SPEICHERN</a></button></div>
            </form>
          </details></div>";
}