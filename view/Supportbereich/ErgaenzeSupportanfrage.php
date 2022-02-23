<?php


class ErgaenzeSupportanfrage
{
    function showContent()
    {
        $content = "<form action='' method='post'><div class='formContainer'>
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
           
                <span><span style='font-weight: bold'>Hinweis:</span><br>Zur Bearbeitung Ihrer Anfrage benötigen 
                wir sämtliche Pflichtfelder. Weitere Informationen unterstützen uns bei<br>
                der Bearbeitung.<br><p></p><br>
                Eine Bearbeitung anhand des Eskalationsprozess ist nur so sichergestellt.</span><br><br>
                <div class='btnDiv'><button class='buttonConfirm'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/'>
                DATEN SPEICHERN</a></button></div>  
           
         </div> </form>";

        return $content;
    }
}