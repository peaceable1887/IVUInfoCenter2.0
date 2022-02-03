<?php

class SeminarDetails
{
    function showSeminarDetails($seminarTile, $descriptionContent, $contentContent, $targetGrpContent,
                                $preconditionContent, $btnContent)
    {
        $seminarDetails = "<div class='detailsContainer'>
                                <div class='tileContent'>
                                ".$seminarTile."
                                </div>
                                <div class='detailsContent'>
                                    <div class='descriptionContent'>".$descriptionContent."</div>
                                    <div class='contentContent'>".$contentContent."</div>
                                    <div class='targetGrpContent'>".$targetGrpContent."</div>
                                    <div class='preconditionContent'>".$preconditionContent."</div> 
                                    <div class='priceContent'></div>                                  
                                </div>
                                <div class='btnContent'>".$btnContent."</div>
                           </div>";

        return $seminarDetails;
    }
}