<?php

class TicketUebersicht
{
    function showContent($overlay)
    {

        $content = "
                    <div class='callTicketContainer'>
                    <div class='menuContent'>
                             
                            <button onclick=\"consultation()\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 3c5.514 0 10 3.592 10 8.007 0 4.917-5.145 7.961-9.91 7.961-1.937 0-3.383-.397-4.394-.644-1 .613-1.595 1.037-4.272 1.82.535-1.373.723-2.748.602-4.265-.838-1-2.025-2.4-2.025-4.872-.001-4.415 4.485-8.007 9.999-8.007zm0-2c-6.338 0-12 4.226-12 10.007 0 2.05.738 4.063 2.047 5.625.055 1.83-1.023 4.456-1.993 6.368 2.602-.47 6.301-1.508 7.978-2.536 1.418.345 2.775.503 4.059.503 7.084 0 11.91-4.837 11.91-9.961-.001-5.811-5.702-10.006-12.001-10.006zm1.024 13.975c0 .566-.458 1.025-1.024 1.025-.565 0-1.024-.459-1.024-1.025 0-.565.459-1.024 1.024-1.024.566 0 1.024.459 1.024 1.024zm1.141-8.192c-.498-.505-1.241-.783-2.09-.783-1.786 0-2.941 1.271-2.941 3.237h1.647c0-1.217.68-1.649 1.261-1.649.519 0 1.07.345 1.117 1.004.052.694-.319 1.046-.788 1.493-1.157 1.1-1.179 1.633-1.173 2.842h1.643c-.01-.544.025-.986.766-1.785.555-.598 1.245-1.342 1.259-2.477.008-.758-.233-1.409-.701-1.882z\"/></svg>
                            &ensp;Rückfrage stellen</button>
                            <button onclick=\"onNote()\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M6 12h10v1h-10v-1zm7.816-3h-7.816v1h9.047c-.45-.283-.863-.618-1.231-1zm-7.816-2h6.5c-.134-.32-.237-.656-.319-1h-6.181v1zm13 3.975v2.568c0 4.107-6 2.457-6 2.457s1.518 6-2.638 6h-7.362v-20h9.5c.312-.749.763-1.424 1.316-2h-12.816v24h10.189c3.163 0 9.811-7.223 9.811-9.614v-3.886c-.623.26-1.297.421-2 .475zm4-6.475c0 2.485-2.015 4.5-4.5 4.5s-4.5-2.015-4.5-4.5 2.015-4.5 4.5-4.5 4.5 2.015 4.5 4.5zm-2.156-.882l-.696-.696-2.116 2.169-.992-.941-.696.697 1.688 1.637 2.812-2.866z\"/></svg>
                            &ensp;Notiz senden</button>
                            <button onclick=\"onInterimReport()\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M16 8v-4l8 8-8 8v-4h-8.929c-9.059 0-7.134-9.521-6.335-11.418.789 2.445 2.465 3.418 5.372 3.418h9.892z\"/></svg>
                            &ensp;Zwischenbericht anfordern</button>
                            <button onclick=\"onFile()\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12.37 5.379l-5.64 5.64c-.655.655-1.515.982-2.374.982-1.855 0-3.356-1.498-3.356-3.356 0-.86.327-1.721.981-2.375l5.54-5.539c.487-.487 1.125-.731 1.765-.731 2.206 0 3.338 2.686 1.765 4.259l-4.919 4.919c-.634.634-1.665.634-2.298 0-.634-.633-.634-1.664 0-2.298l3.97-3.97.828.828-3.97 3.97c-.178.177-.178.465 0 .642.177.178.465.178.642 0l4.919-4.918c1.239-1.243-.636-3.112-1.873-1.874l-5.54 5.54c-.853.853-.853 2.24 0 3.094.854.852 2.24.852 3.093 0l5.64-5.64.827.827zm.637-5.379c.409.609.635 1.17.729 2h7.264v11.543c0 4.107-6 2.457-6 2.457s1.518 6-2.638 6h-7.362v-8.062c-.63.075-1 .13-2-.133v10.195h10.189c3.163 0 9.811-7.223 9.811-9.614v-14.386h-9.993zm4.993 6h-3.423l-.793.793-.207.207h4.423v-1zm0 3h-6.423l-1 1h7.423v-1zm0 3h-9.423l-.433.433c-.212.213-.449.395-.689.567h10.545v-1z\"/></svg>
                            &ensp;Datei anhängen</button>
                            <button onclick=\"onAddInfos()\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 16h-3v-1h3v1zm.317-5l.863-1h-4.18v3h2.565l.193-.959.014-.041h-1.772v-1h2.317zm4.424 4.104l-3.015-2.677-.007.009-.469 3.564 3.491-.896zm.649-.76l6.61-7.75-3-2.594-6.62 7.671 3.01 2.673zm-10.39-2.344h-3v1h3v-1zm12 6h-17v-10h12.906l1.726-2h-16.632v14h21v-6.826l-2 2.337v2.489zm-12-8h-3v1h3v-1zm-3 6h3v-1h-3v1z\"/></svg>
                            &ensp;Information hinzufügen</button>
                            <button onclick=\"onCompleteSupportRequest()\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z\"/></svg>
                            &ensp;Supportanfrage abschließen</button>
                            
                        </div>                     
                        <div class='callTicketContent'>
                            <div class='callTicketMetaData'>
                                <span class='metaData'>Datum:<br></span>
                                <span class='metaData'>Sachgebiet<br></span>
                                <span class='metaData'>Status<br></span>
                            </div>
                            <div class='callTicketMetaData'>
                                <span class='metaData'>Priorität:<br></span>
                                <span class='metaData'>Kategorie:<br></span>
                                <span class='metaData'>Eingestellt von:<br></span>
                            </div>
                            <div class='callTicketMetaData'>
                                <span class='metaData'>Betreff:<br></span>
                            </div>
                            <div class='callTicketDescription'>
                                <span class='descriptionField'>Beschreibung:<br></span>                       
                            </div>                         
                        </div>
                        <div class='callTicketProcess'>
                            <div class='process'>Verlauf / Zwischenbericht:</div>
                        </div>
                    </div>
                   ";

        return $content;
    }
}