<?php
/*
Plugin Name: Shortcodes: Supportbereich
Description: Stellt alle Funktionen für den Supportbereich zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/
session_start();

add_shortcode("sc_mySupportRequest", "mySupportRequest");

function mySupportRequest()
{
    include_once ("Database/ivu-dbCon.php");
    include_once ("css/style.php");

    echo "<table style='font-family: roboto condensed;font-size: 17px'>\n";
    echo "<tr>\n";
    echo "<button type=\"button\">Meine offenen</button>\n";
    echo "<button type=\"button\">Unsere Offenen</button>\n";
    echo "<button type=\"button\">Meine erledigten</button>\n";
    echo "<button type=\"button\">Unsere erledigten</button>\n";
    echo "</tr>\n";
    echo "</table>";

    echo "<label for=\"suche\">Suchbegriff eingeben</label> 
          <input type=\"search\" id=\"suche\" placeholder=\"Suche...\">";

    echo "<table style='font-family: roboto condensed;font-size: 17px'>\n";
    echo "<tr>\n";
    echo "<th style='color: #b72a37; font-weight: bold;'>Nummer</th>\n";
    echo "<th style='color: #b72a37; font-weight: bold;'>Datum</th>\n";
    echo "<th style='color: #b72a37; font-weight: bold;'>Status</th>\n";
    echo "<th style='color: #b72a37; font-weight: bold;'>Sachgebiet</th>\n";
    echo "<th style='color: #b72a37; font-weight: bold;'>Betreff</th>\n";
    echo "</td>\n";
    echo "</table>";
}

add_shortcode("sc_createSupportRequest", "createSupportRequest");

function createSupportRequest()
{
    include_once ("css/buchung.php");
    include_once ("css/style.php");
    include_once ("css/Supportbereich/neueSupportanfrage.php");

    echo "<div class='formContainer'>
            <table id='formular'>
                 <tr>
                    <th>Sachgebiet*<br>
                                         <select>
                                            <option value=\"\" disabled selected hidden>Sachgebiet auswählen...</option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                          </select></th>
                    <th></th>
                </tr>
                <tr>
                    <th>Typ der Anfrage* <br><select>
                                            <option value=\"\" disabled selected hidden>Typ der Anfrage auswählen...</option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                          </select></th></th>
                </tr>
                <tr>
                    <th>Priorität* <br><select>
                                            <option value=\"\" disabled selected hidden>Priorität auswählen...</option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                          </select></th></th>
                </tr>
                <tr>
                    <th>Betreff*<br><input class='inputField'name='vorname' value=''></th>
                </tr>
                <tr>
                    <th>Beschreibung* <br><textarea class='supportDescription'></textarea></th>
                </tr>
                <tr>
                    <th>Dateianhang* <br><input id=\"fileFile\" type=\"File\" name=\"file\"></th>
                </tr>
              </table>
              <form style='font-size: 17px; font-family: \"roboto condensed\";'>
                <span><span style='font-weight: bold'>Hinweis:</span><br>Zur Erfassung Ihrer Supportanfrage füllen Sie 
                bitte alle Felder vollständig aus und klicken dann auf „Daten speichern“.<br><p></p><br>
                Bitte hängen Sie ein Bildschirmfoto oder eine weiterführende Datei an Ihre Anfrage an.</span><br><br>
                <div class='btnDiv'><button class='buttonConfirm'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/daten-zur-supportanfrage-ergaenzen/'>
                SUPPORT ANFRAGEN</a></button></div>
            </form>
         </div>";
}

add_shortcode("sc_expandSupportRequest", "expandSupportRequest" );

function expandSupportRequest()
{
    include_once ("css/buchung.php");
    include_once ("css/style.php");
    include_once ("css/Supportbereich/neueSupportanfrage.php");

    echo "<div class='formContainer'>
            <table id='formular'>
                 <tr>
                    <th>Software-Version*<br><input class='inputField' name='vorname' value=''></th>
                </tr>
                <tr>
                  <th>Konzern, in dem das Problem auftriff* <br><input class='inputField' name='vorname' value=''></th>
                </tr>
                <tr>
                    <th>Mandat, in dem das Problem auftritt* <br><input class='inputField' name='vorname' value=''></th>
                </tr>
                <tr>
                    <th>Instanz der Software*<br><select>
                                            <option value=\"\" disabled selected hidden>Instanz der Software auswählen...</option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                          </select></th>
                </tr>
                <tr>
                    <th>Sicht im Unternehmen* <br><select>
                                            <option value=\"\" disabled selected hidden>Sicht im Unternehmen auswählen...</option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                          </select></th>
                </tr>
                <tr>
                    <th>Spezifikation <br><input class='inputField' name='vorname' value=''></th>
                </tr>
                <tr>
                    <th>Fehlermeldung als Text <br><input class='inputField' name='vorname' value=''></th>
                </tr>
                <tr>
                    <th>Welche Aktion löst die Fehlermeldung aus? <br><input class='inputField' name='vorname' value=''></th>
                </tr>
              </table>
              <form style='font-size: 17px; font-family: \"roboto condensed\";'>
                <span><span style='font-weight: bold'>Hinweis:</span><br>Zur Bearbeitung Ihrer Anfrage benötigen 
                wir sämtliche Pflichtfelder. Weitere Informationen unterstützen uns bei<br>
                der Bearbeitung.<br><p></p><br>
                Eine Bearbeitung anhand des Eskalationsprozess ist nur so sichergestellt.</span><br><br>
                <div class='btnDiv'><button class='buttonConfirm'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/'>
                DATEN SPEICHERN</a></button></div>  
            </form>
         </div>";
}

add_shortcode("sc_supportRequestTicket", "supportRequestTicket" );

function supportRequestTicket()
{
    include_once ("css/buchung.php");
    include_once ("css/style.php");
    include_once ("css/Supportbereich/supportRequestTicket.php");

    echo "<div class='ticketContainer'>
           "; include('HTML/Supportbereich/overlays.php');
           echo "
            <div class='ticketMenu'>
                <nav>
                    <ul>
                        <li><button onclick=\"inquiry()\">Rückfrage stellen</button></li>
                        <li><button onclick=\"onNote()\">Notiz an IVU senden</button></li>
                        <li><button onclick=\"onInterimReport()\">Zwischenbericht anfordern</button></li>
                        <li><button onclick=\"onFile()\">Datei anhängen</button></li>
                        <li><button onclick=\"onAddInfos()\">Information hinzufügen</button></li>
                        <li><button onclick=\"onCompleteSupportRequest()\">Supportanfrage abschließen</button></li>
                    </ul>
                </nav>
            </div>
            <div class='ticketInfos'>
                <div class='ticketMetaData'></div>
                    <h5>SUPPORTANFRAGE NUMMER: XXXXXXX</h5>
                    <table>
                        <tr>
                            <th>Datum: </th>
                            <th>Sachgebiet: </th>
                            <th>Status: </th>
                        </tr>
                        <tr>
                            <th>Priorität: </th>
                            <th>Kategorie: </th>
                            <th>Eingestellt von: </th>
                        </tr>
                        <tr style='border-bottom: none;'>
                            <th>Betreff: </th>                 
                        </tr>
                        <tr>
                            <th>Beschreibung: </th>
                        </tr>
                    </table>
                <div class='ticketChat'>
                    <p><b>Verlauf / Zwischenbericht:</b></p>
                </div>
            </div>
          </div>";

}

//Übersicht Supportanfragen

add_shortcode("sc_menuDownloadCenter","menuDownloadCenter");

function menuDownloadCenter()
{
    include_once "css/btn.style.php";

    echo "<table class='menuDownloadCenter'>
            <th><button>Meine offenen</button></th>
            <th><button>Unsere offenen</button></th>
            <th><button>Meine erledigten</button></th>
            <th><button>Unsere erledigten</button></th>
          </table>";
}

add_shortcode("sc_tableDownloadCenter", "tableDownloadCenter");

function tableDownloadCenter()
{
    include_once "Database/ivu-dbCon.php";
    include_once "css/table.style.php";
    include_once "Sql/Supportanfragen/Meine Anfragen/myCalls_query.php";

    $dbCon = new infoCenterDbCon();
    $sqlStatement = new myCalls_query();

    $sql = $sqlStatement->myCompleted($_SESSION['userid']);
    $sqlRes = mysqli_query($dbCon, $sql);

    $recordCount = mysqli_num_rows($sqlRes);

    echo "<table class='tableList'>\n";
    echo "<tr>\n";
    echo "<th>Nummer</th>\n";
    echo "<th>Datum</th>\n";
    echo "<th>Status</th>\n";
    echo "<th>Sachgebiet</th>\n";
    echo "<th>Betreff</th>\n";
    echo "<th>Mitarbeiter/-in</th>\n";
    echo "<th>Details</th>\n";
    echo "</td>\n";

    for ($i = 0;$i < $recordCount;$i++)
    {
        $arCur = mysqli_fetch_array($sqlRes);

        echo "<tr>\n";

        echo "<td>\n";
        echo  utf8_encode($arCur["Call_Number"]);
        echo "</td>\n";

        echo "<td>\n";
        echo utf8_encode($arCur["Call_Date_Received"]);
        echo "</td>\n";

        echo "<td>\n";
        echo utf8_encode($arCur["Status_Name"]);
        echo "</td>\n";

        echo "<td>\n";
        echo utf8_encode($arCur["Field_Name"]);
        echo "</td>\n";

        echo "<td>\n";
        echo utf8_encode($arCur["Call_Subject"]);
        echo "</td>\n";

        echo "<td>\n";
        echo utf8_encode($arCur["User_Surname"]);
        echo "</td>\n";

        echo "<td>\n";
        echo "<a id='linkDescription' href='?linkDescription".$i."'>
              <span class='btnMore'>Mehr erfahren</span></a>";
        echo "</td>\n";

        echo "</tr>\n";
    }


    echo "</table>\n";

}

