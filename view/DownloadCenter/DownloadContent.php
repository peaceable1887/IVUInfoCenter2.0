<?php

class DownloadContent
{
    function downloadContentDescription($downloadSubject, $downloadDate, $downloadNumber, $userFirstname, $userSurname, $fieldName,
                                        $downloadDescription, $fileSize)
    {
        $testContent = "<div class='descriptionContainer'>                                          
                            <div class='descriptionContent'>
                                <div class='descriptionMetaData'>
                                    <span class='descriptionMetaDataHeadline'>Download <span class='downlMetaDataContent'>".$downloadSubject."</span></span>
                                </div>
                                <div class='descriptionMetaData'>
                                    <span class='downlMetaData'>Datum:<br><span class='downlMetaDataContent'>".$downloadDate."</span></span>
                                    <span class='downlMetaData'>Nummer:<br><span class='downlMetaDataContent'>".$downloadNumber."</span></span>
                                    <span class='downlMetaData'>Mitarbeiter:<br><span class='downlMetaDataContent'>".$userFirstname." ".$userSurname."</span></span>
                                </div>
                                <div class='detailsContent'>
                                    <div class='detailsMetaData'>
                                        <span class='downlMetaData'>Datei:<br><span class='downlMetaDataContent'>".$downloadSubject."</span></span>
                                        <span class='downlMetaData'>Größe:<br><span class='downlMetaDataContent'>".$fileSize."</span></span>
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
