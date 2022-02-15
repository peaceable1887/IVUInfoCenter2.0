<?php

echo "<div id='overlayTest' >
        <div id='text'>
            <div class='overlayTop'>         
                <span>Rückfrage an IVU:</span>
                <button class='overlayCloseBtn' onclick='offConsultation()'>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\"><path d=\"M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z\"/></svg>
                </button>
            </div>
            <div class='overlayCenter'>
                <textarea></textarea>
            </div>
            <div class='overlayBottom'>
                <div class='btnDiv'>
                    <button class='overlayBtn'>
                        <a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/'>
                        DATEN SPEICHERN
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>";

echo "<div id='overlayNote' >
        <div id='text'>
            <div class='overlayTop'>         
                <span>Notiz an IVU:</span>
                <button class='overlayCloseBtn' onclick='offNote()'>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\"><path d=\"M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z\"/></svg>
                </button>
            </div>
            <div class='overlayCenter'>
                <textarea></textarea>
            </div>
            <div class='overlayBottom'>
                <div class='btnDiv'>
                    <button class='overlayBtn'>
                        <a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/'>
                        DATEN SPEICHERN
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>";

echo "<div id='overlayInterimReport' >
        <div id='text'>
            <div class='overlayTop'>         
                <span>Möchten Sie einen Zwischenbericht anfordern?</span>
                <button class='overlayCloseBtn' onclick='offInterimReport()'>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\"><path d=\"M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z\"/></svg>
                </button>
            </div>
            
            <div class='overlayBottom'>
                <div class='btnDiv'>
                    <button class='overlayBtn'>
                        <a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/'>
                        JA
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>";

echo "<div id='overlayFile' >
        <div id='text'>
            <div class='overlayTop'>         
                <span>Weitere Datei an die Supportanfrage anhängen</span>
                <button class='overlayCloseBtn' onclick='offFile()'>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\"><path d=\"M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z\"/></svg>
                </button>
            </div>
            <div class='overlayCenter'>
                 <span>Dateianhang*</span><br>
                 <input id=\"fileFile\" type=\"File\" name=\"file\">
            </div>
            <div class='overlayBottom'>
                <div class='btnDiv'>
                    <button class='overlayBtn'>
                        <a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/'>
                        DATEN SPEICHERN
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>";

echo "<div id='overlayAddInfos' >
        <div id='text'>
            <div class='overlayTop'>         
                <span>Information hinzufügen</span>
                <button class='overlayCloseBtn' onclick='offAddInfos()'>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\"><path d=\"M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z\"/></svg>
                </button>
            </div>
            <div class='overlayCenter'>
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
            </div>
            <div class='overlayBottom'> 
                <div class='btnDiv'>
                    <button class='overlayBtn'>
                        <a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/'>
                        DATEN SPEICHERN
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>";


echo "<div id='overlayCompleteSupportRequest' >
        <div id='text'>
            <div class='overlayTop'>         
                <span>Erläuterung:*</span>
                <button class='overlayCloseBtn' onclick='offCompleteSupportRequest()'>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\"><path d=\"M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z\"/></svg>
                </button>
            </div>
            <div class='overlayCenter'>
               <textarea></textarea>
            </div>
            <div class='overlayBottom'>
                <div class='btnDiv'>
                    <button class='overlayBtn'>
                        <a id='linkDescription' href='http://127.0.0.1/wordpress/support-anfrage-nummer/'>
                        ABSCHLIEßEN
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>";

?>
<script>
    //Rückfrage
    function consultation() {
        document.getElementById("overlayTest").style.display = "block";
    }
    function offConsultation() {
        document.getElementById("overlayTest").style.display = "none";
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
<style>
    #overlayTest, #overlayNote, #overlayInterimReport, #overlayFile, #overlayCompleteSupportRequest, #overlayAddInfos
    {
        position: absolute;
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
    .overlayTop
    {
        display: flex;
        justify-content: space-between;
        margin: 0 0 3% 0;
    }
    .overlayTop span
    {
        font-size: 20px;
    }
    .overlayCenter
    {

    }
    .overlayBottom
    {
        display: flex;
        justify-content: end;
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
    .overlayCloseBtn
    {
        color: black;
        background-color: white;
        line-height: normal;
        float: right;
        padding: 5px;
        font-size: 12px;
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
    .overlayCloseBtn:hover
    {
        color:#af3843 ;
        background-color: white;
        transition: all .4s ease;
        -webkit-transition: all .4s ease;
    }
    #overlayAddInfos p
    {
        margin: 0;
    }
    #text{
        font-family: var(--fontfamily-global);
        position: absolute;
        background-color: white;
        padding: 20px;
        width: 50%;
        height: auto;
        top: 50%;
        left: 50%;
        border: 1px solid grey;
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
        width: 100%;
        padding: 0 0 0 10px;
        font-size: 16px;
        border: 1px solid #9d9d9c;
    }
    option
    {
        width: 100%;
        border: 1px solid #9d9d9c;
    }
    .inputField
    {
        width: 100%;
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
<?php

?>

