<?php

session_start();

class infoTile
{
    private $fieldName;
    private $semName;
    private $startDate;
    private $endDate;
    private $eventLocation;
    private $typeName;
    private $linkVarCount;

    /**
     * semTile constructor.
     * @param $fieldName
     * @param $semName
     * @param $startDate
     * @param $endDate
     * @param $eventLocation
     * @param $typeName
     * @param $linkVarCount
     */
    public function __construct($fieldName, $semName, $startDate, $endDate, $eventLocation, $typeName,$linkVarCount)
    {
        $this->fieldName = $fieldName;
        $this->semName = $semName;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->eventLocation = $eventLocation;
        $this->typeName = $typeName;
        $this->linkVarCount = $linkVarCount;
    }

    public function __toString()
    {
        include "css/style.php";

        return "<div class=\"infoTile\">
                    <div class=\"infoImg\"></div>
                    <div class=\"infoText\">
                        <span class=\"infoHeadline\">IVU Express 58</span><br>
                        <span class=\"subText\">Wissenswerrtes rund um die Versorgungswirtschaft</span>
                    </div>
                    <div class=\"btnContainerInfo\">
                        <button class=\"infoReadMore\">Weiterlesen</button>
                    </div>  
                </div>";
    }
}