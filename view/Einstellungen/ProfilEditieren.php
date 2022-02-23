<?php

class ProfilEditieren
{
    function editProfil($gender, $firstname, $Surname, $eMail, $phone, $mobil)
    {
        $container = "<form action='' method='post'><div class='formContainerSettings'><details open>
            <summary>Änderung Ihres Profils</summary>
            <table id='formular'>
                 <tr>
                    <th>Anrede*<br><input class='formInput' name='vorname' value='". $gender."'></th>
                    <th></th>
                </tr>
                <tr>
                    <th>Vorname* <br><input class='formInput' name='vorname' value='".$firstname."'></th>
                    <th>Nachname* <input class='formInput' name='nachname' value='".$Surname."'></th>
                </tr>
                <tr>
                    <th>Unternehmen* <br><input class='formInput' name='vorname' value=''></th>
                    <th>E-Mail* <br><input class='formInput' name='nachname' value='".$eMail."'></th>
                </tr>
                <tr>
                    <th>Telefon*<br><input class='formInput' name='vorname' value='".$phone."'></th>
                    <th>Mobiltelefon* <input class='formInput' name='nachname' value='".$mobil."'></th>
                </tr>
                <tr>
                    <th>Abteilung* <br><input class='formInput' name='vorname' value=''></th>
                    <th>Funktion* <br><input class='formInput' name='nachname' value=''></th>
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
        
                <span><span style='font-weight: bold'>Hinweis:</span><br>Bitte füllen Sie möglichst alle Felder vollständig 
                aus und klicken dann auf „Daten speichern“. Die mit * gekennzeichneten<br> 
                      Felder sind Pflichtfelder.</span><br><br>
                <div class='btnDiv'><button class='buttonConfirm'>
                <a id='linkDescription' href=''>
                DATEN SPEICHERN</a></button></div>
         
          </details></div></form>";

        return $container;
    }

    function editAddress()
    {
        $container = "<form action='' method='post'><div class='formContainerSettings'><details>
            <summary>Abweichende Anschrift zur Unternehmensadresse</summary>
            <table id='formular'>
                 <tr>
                    <th>Straße und Hausnummer<br><input class='formInput' name='vorname' value=''></th>
                    <th></th>
                </tr>
                <tr>
                    <th>Postleitzahl<br><input class='formInput' name='vorname' value=''></th>
                    <th>Ort<br><input class='formInput' name='nachname' value=''></th>
                </tr>
              </table>
         
                 <br><br>
                <div class='btnDiv'><button class='buttonConfirm'>
                <a id='linkDescription' href=''>
                DATEN SPEICHERN</a></button></div>
          
          </details></div></form>";

        return $container;
    }

    function selectInterests()
    {
        $container = "<form action='' method='post'><div class='formContainerSettings'><details>
            <summary>Meine Interessen</summary>
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
             
                 <br><br>
                <div class='btnDiv'><button class='buttonConfirm'>
                <a id='linkDescription' href=''>
                DATEN SPEICHERN</a></button></div>
            </form>
          </details></div></form>";

        return $container;
    }

    function editAccessData()
    {
        $container = "<form action='' method='post'><div class='formContainerSettings'><details>
            <summary>Änderung Ihrer Zugangsdaten</summary>
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
           
                 <br><br>
                <div class='btnDiv'><button class='buttonConfirm'>
                <a id='linkDescription' href=''>
                DATEN SPEICHERN</a></button></div>
           
          </details></div> </form>";

        return $container;
    }
}