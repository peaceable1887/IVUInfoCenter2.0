<?php

class SeminarDetails
{
    function showSeminarDetails($descriptionContent, $contentContent, $targetGrpContent,
                                $preconditionContent, $btnContent)
    {
        $seminarDetails = "<div class='detailsContainer'>
                                <div class='tileContent'>     
                                </div>
                                <div class='detailsContent'>
                                    <div class='descriptionContent'>
                                        <span class='infoTitle'>Beschreibung</span><br>".$descriptionContent."
                                    </div>
                                    <div class='contentContent'>
                                        <span class='infoTitle'>Inhalt</span><br>".$contentContent."
                                    </div>
                                    <div class='targetGrpContent'>
                                        <span class='infoTitle'>Zielgruppe</span><br>".$targetGrpContent."
                                    </div>
                                    <div class='preconditionContent'>
                                        <span class='infoTitle'>Voraussetzungen</span><br>".$preconditionContent."
                                    </div> 
                                    <div class='priceContent'>
                                        <span class='infoTitle'>Preis</span><br>
                                    </div>                                  
                                </div>
                                <div class='btnContent'>".$btnContent."</div>
                           </div>";

        return $seminarDetails;
    }

}