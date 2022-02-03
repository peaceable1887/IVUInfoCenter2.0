<?php

class TicketUebersicht
{
    function showContent($overlay)
    {
        $tickContent = "<div class='content'>
                            <div class='mainContent'>
                                <div class='menuContent'>
                                     <nav>
                                        <ul>
                                            <li><button onclick=\"inquiry()\">Rückfrage stellen</button></li>
                                            <li><button onclick=\"onNote()\">Notiz senden</button></li>
                                            <li><button onclick=\"onInterimReport()\">Zwischenbericht anfordern</button></li>
                                            <li><button onclick=\"onFile()\">Datei anhängen</button></li>
                                            <li><button onclick=\"onAddInfos()\">Information hinzufügen</button></li>
                                            <li><button onclick=\"onCompleteSupportRequest()\">Supportanfrage abschließen</button></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class='ticketContent'>
                                    <h5>SUPPORTANFRAGE NUMMER:</h5>  
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
                                        <p>Verlauf / Zwischenbericht:</p>
                                    </div>
                                </div>
                            </div>
                            <div class='secContent'>
                                <div class='finallyRequest'>
                                   
                                </div>
                            </div>
                        </div>";

        return $tickContent;
    }
}