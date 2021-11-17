<?php

include "../../css/overlay.php";
include ("../../css/Supportbereich/neueSupportanfrage.php");

echo "<div id='overlay' >
    <div id=\"text\">
    <p>Rückfrage an IVU:<button class='overlayBtn' onclick='offInquiry()'>X</button></p><br>
    <textarea></textarea>
    <div class='btnDiv'><button class='overlayBtn'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/'>
                DATEN SPEICHERN</a></button></div>
    </div>
</div>";
echo "<div id='overlayNote'>
    <div id=\"text\">
    <p>Notiz an IVU:<button class='overlayBtn' onclick='offNote()'>X</button></p><br>
    <textarea></textarea>
    <div class='btnDiv'><button class='overlayBtn'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/'>
                DATEN SPEICHERN</a></button></div>
    </div>
</div>";
echo "<div id='overlayInterimReport' >
    <div id=\"text\">
    <p>Möchten Sie einen Zwischenbericht anfordern?<button class='overlayBtn' onclick='offInterimReport()'>X</button></p><br>
    <div class='btnDiv'><button class='overlayBtn'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/'>
                Ja</a><button class='overlayBtn'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/'>
                Nein</a></button></button></div>
    </div>
</div>";
echo "<div id='overlayFile' >
    <div id=\"text\">
    <p>Weitere Datei an die Supportanfrage anhängen<button class='overlayBtn' onclick='offFile()'>X</button></p><br>
    <span>Dareianhang*</span><br>
    <input id=\"fileFile\" type=\"File\" name=\"file\">
    <div class='btnDiv'><button class='overlayBtn'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/'>
                DATEN SPEICHERN</a></button></div>
    </div>
</div>";
echo "<div id='overlayAddInfos' >
    <div id=\"text\">
    <p>Information hinzufügen<button class='overlayBtn' onclick='offAddInfos()'>X</button></p><br>
     <table class='tableTicketOverlay'>
                 <tr>
                    <th>Software-Version*<br><input class='inputField' name='vorname' value=''></th>
                </tr>
                <tr>
                  <th>Konzern, in dem das Problem auftriff* <br><input class='inputField' name='vorname' value=''></th>
                </tr>
                <tr>
                    <th>Mandat, in dem das Problem auftritt* <br><input class='inputField' name='vorname' value=''><br></th>
                </tr>
                <tr>
                    <th><select>
                    <option value=\"\" disabled selected hidden>Sicht im Unternehmen auswählen...</option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                  </select></th>
                </tr>
                <tr>
                    <th><select>
                    <option value=\"\" disabled selected hidden>Instanz der Software auswählen...</option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                  </select><br></th>
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
              <span><span style='font-weight: bold'>Hinweis:</span><br>Zur Erfassung Ihrer Supportanfrage füllen Sie 
                bitte alle Felder vollständig aus und klicken dann auf „Daten speichern“.<br><p></p><br>
                Bitte hängen Sie ein Bildschirmfoto oder eine weiterführende Datei an Ihre Anfrage an.</span><br><br>
                <div class='btnDiv'><button class='overlayBtn'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/daten-zur-supportanfrage-ergaenzen/'>
                DATEN SPEICHERN</a></button></div>
    </div>
</div>";
echo "<div id='overlayCompleteSupportRequest'>
    <div id=\"text\">
    <p>Erläuterung:*<button class='overlayBtn' onclick='offCompleteSupportRequest()'>X</button></p><br>
    <textarea></textarea>
    <div class='btnDiv'><button class='overlayBtn'>
                <a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/'>
                Abschließen</a></button></div>
    </div>
</div>";
?>
<script>
    //Rückfrage
    function inquiry() {
        document.getElementById("overlay").style.display = "block";
    }
    function offInquiry() {
        document.getElementById("overlay").style.display = "none";
    }

    //Notiz
    function onNote() {
        document.getElementById("overlayNote").style.display = "block";
    }
    function offNote() {
        document.getElementById("overlayNote").style.display = "none";
    }

    //Zwischenbericht
    function onInterimReport() {
        document.getElementById("overlayInterimReport").style.display = "block";
    }
    function offInterimReport() {
        document.getElementById("overlayInterimReport").style.display = "none";
    }

    //Zwischenbericht
    function onFile() {
        document.getElementById("overlayFile").style.display = "block";
    }
    function offFile() {
        document.getElementById("overlayFile").style.display = "none";
    }

    //Information hinzufügen
    function onAddInfos() {
        document.getElementById("overlayAddInfos").style.display = "block";
    }
    function offAddInfos() {
        document.getElementById("overlayAddInfos").style.display = "none";
    }

    //Supportanfrage abschließen
    function onCompleteSupportRequest() {
        document.getElementById("overlayCompleteSupportRequest").style.display = "block";
    }
    function offCompleteSupportRequest() {
        document.getElementById("overlayCompleteSupportRequest").style.display = "none";
    }
</script>

<?php
?>
<style>
    #overlay, #overlayNote, #overlayInterimReport, #overlayFile, #overlayAddInfos,
    #overlayCompleteSupportRequest{
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.5);
        z-index: 2;
        cursor: pointer;
    }
    .overlayBtn
    {
        height: auto;
        width: auto;
        color: white;
        background-color: #b72a37;
        line-height: normal;
        font-size: 16px;
        font-family: "roboto condensed";
        padding: 10px;
        float: right;
    }
    .overlayBtn a
    {
        color: white;
    }
    .overlayBtn:hover
    {
        background-color: #af3843;
        transition: all .4s ease;
        -webkit-transition: all .4s ease;
    }
    #text{
        position: absolute;
        background-color: white;
        padding: 20px;
        width: 50%;
        height: auto;
        top: 50%;
        left: 50%;
        border: 1px solid grey;
        border-radius: 10px;
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
    }
    #text p
    {
        color: #b72a37;
    }
    textarea
    {
        width: 100%;
        height: 200px;
        margin-bottom: 20px;
    }
    select
    {
        width: 96.25%;
        padding: 0 0 0 10px;
        font-size: 16px;
        border: 1px solid #9d9d9c;
    }
    option
    {
        width: 96.25%;
        border: 1px solid #9d9d9c;
    }
    .inputField
    {
        width: 96.25%;
        height: 35px;
        border: 1px solid #9d9d9c;

    }
    .supportDescription
    {
        height: 200px;
    }
    .tableTicketOverlay tr
    {
        border: none;
    }
</style>
