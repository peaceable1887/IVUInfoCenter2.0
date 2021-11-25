<?php

class TeilnehmendePerson
{
    function showRegister($firstName, $surname, $eMail,$linkCounter)
    {
        $container = "<div class='formContainer'>
                <h5>Informationen zur teilnehmende Person</h5>
                <table id='formular'>
                <tr>
                    <th>Vorname: <input class='formInput' name='vorname' value='".$firstName."'></th>
                    <th>Name: <input class='formInput' name='nachname' value='".$surname."'></th>
                    <th>E-Mail: <input class='formInput' name='email' value='".$eMail."'></th>
                </tr>
              </table>
               <div class=\"field_wrapper\">
                
                </div>
                <div class='addAttendees'><a href=\"javascript:void(0);\" class=\"add_button\" title=\"Add field\">
                        <p><span class='plusChar'>&#43   </span>weitere Teilnehmer hinzufügen</p></a></div>
              <span class='bemerkung'>Bemerkung:</span><textarea rows='4' cols='50' placeholder='Freitextfeld für z.B. abweichende Mailadresse für Bestätigung...'></textarea>
            <form style='font-size: 17px; font-family: \"roboto condensed\";'>
                <input type='checkbox' id='checkbox01'>
                <label for='checkbox01'> Ja, ich habe die Allgemeinen Richtlinien für Schulungen gelesen *</label><br>
                <input type='checkbox' id='checkbox02'>
                <label for='checkbox02'> Ja, ich melde die genannten teilnehmenden Personen verbindlich an *</label><br>
                <input type='checkbox' id='checkbox03'>
                <label for='checkbox03'> Ich habe die Informationen zum Datenschutz gelesen und bin damit einverstanden.*</label><br><br>
                <div class='btnDiv'><button class='buttonConfirm'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/akademie-events-buchung-schritt-3/?linkDescription".$linkCounter."'>
                Kostenplfichtig<br>buchen</a></button></div>
            </form></div>";

        return $container;
    }
}