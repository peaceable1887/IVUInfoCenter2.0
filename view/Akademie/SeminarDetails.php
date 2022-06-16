<?php

class SeminarDetails
{
    function showSeminarDetails($semTile,$descriptionContent, $contentContent, $targetGrpContent,
                                $preconditionContent, $btnContent)
    {
        $seminarDetails = "<div class='tileContainer'>     
                              ".$semTile."  
                            </div>
                            <div class='detailsContainer'>                                
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
                                <div class='btnContent'><div class='btnReg'>".$btnContent."</div></div>
                           </div>";

        return $seminarDetails;
    }

}