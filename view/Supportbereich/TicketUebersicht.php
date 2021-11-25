<?php


class TicketUebersicht
{
    function showContent($overlay)
    {

        $content = "<div class='ticketContainer'>
           "; $overlay;
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
          </div>";;

        return $content;
    }
}