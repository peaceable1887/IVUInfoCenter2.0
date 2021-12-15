<?php

class downloadContent
{
    function downloadContentDescription($downloadSubject, $downloadDate, $downloadNumber, $fieldName,
                                        $downloadDescription, $fileSize)
    {

        $content = "<div class='descriptionContainer'>
                        <span class='descriptionText'>Download: <span class='loadedText'>".$downloadSubject."</span></span>
                        <table>
                            <th>Datum: <span class='loadedText'>".$downloadDate."</span></th>
                            <th>ID: <span class='loadedText'>".$downloadNumber."</span></th>
                            <th>Kategorie: <span class='loadedText'>".$fieldName."</span></th>
                        </table>
                        <span class='descriptionText'>Beschreibung:<br><span class='loadedText'>".$downloadDescription."</span>
                    </div>
                    <div class='detailsContainer'>
                        <span class='descriptionText'>Datei: <span class='loadedText'>".$downloadSubject."</span></span>
                        <table>
                            <tr>
                                <th>Datum: <span class='loadedText'>".$downloadDate."</span></th>
                                <th>Größe: <span class='loadedText'>".$fileSize."</span></th>
                                <th>Kategorie: <span class='loadedText'>".$fieldName."</span></th>
                                <th><button class='buttonDownload'>JETZT DOWNLOADEN</button></th>
                            </tr>
                        </table>
                    </div>";


        return $content;
    }
}
