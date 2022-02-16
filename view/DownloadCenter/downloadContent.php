<?php

class downloadContent
{
    function downloadContentDescription($downloadSubject, $downloadDate, $downloadNumber, $fieldName,
                                        $downloadDescription, $fileSize)
    {

        $content = "<div class='descriptionContainer'>
                        <span class='descriptionText'>Download: <br><span class='loadedText'>".$downloadSubject."</span></span>
                        <table>
                            <th>Datum: <br><span class='loadedText'>".$downloadDate."</span></th>
                            <th>ID: <br><span class='loadedText'>".$downloadNumber."</span></th>
                            <th>Kategorie: <br><span class='loadedText'>".$fieldName."</span></th>
                        </table>
                        <span class='descriptionText'>Beschreibung:<br><span class='loadedText'>".$downloadDescription."</span>
                    </div>
                    <div class='detailsContainer'>
                        <span class='descriptionText'>Datei: <br><span class='loadedText'>".$downloadSubject."</span></span>
                        <table>
                           
                                <th>Datum: <br><span class='loadedText'>".$downloadDate."</span></th>
                                <th>Größe: <br><span class='loadedText'>".$fileSize."</span></th>
                                <th>Kategorie: <br><span class='loadedText'>".$fieldName."</span></th>
                          
                        </table>
                        <button class='buttonDownload'>JETZT DOWNLOADEN</button>
                    </div>";

        $testContent = "<div class='descriptionContainer'>                                          
                            <div class='descriptionContent'>
                                <div class='descriptionMetaData'>
                                    <span class='descriptionMetaDataHeadline'>Download <span class='downlMetaDataContent'>".$downloadSubject."</span></span>
                                </div>
                                <div class='descriptionMetaData'>
                                    <span class='downlMetaData'>Datum:<br><span class='downlMetaDataContent'>".$downloadDate."</span></span>
                                    <span class='downlMetaData'>Nummer:<br><span class='downlMetaDataContent'>".$downloadNumber."</span></span>
                                    <span class='downlMetaData'>Mitarbeiter:<br><span class='downlMetaDataContent'>".$fieldName."</span></span>
                                </div>
                                <div class='detailsContent'>
                                    <div class='detailsMetaData'>
                                        <span class='downlMetaData'>Datei:<br><span class='downlMetaDataContent'>".$downloadSubject."</span></span>
                                        <span class='downlMetaData'>Größe:<br><span class='downlMetaDataContent'></span></span>
                                        <span class='downlMetaData'>Kategorie:<br><span class='downlMetaDataContent'>".$fieldName."</span></span>
                                    </div>
                                </div> 
                                <div class='descriptionDescription'>
                                    <span class='descriptionText'>Beschreibung:<br><span class='downlMetaDataContent'>".$downloadDescription."</span></span>                       
                                </div>                         
                            </div>
                            <div class='detailsContainer'>                     
                                
                                <div class='downlBtnContainer'>
                                    <button class='buttonDownload'>JETZT DOWNLOADEN</button>
                                </div>                        
                            </div>
                        </div>";


        return $testContent;
    }
}
