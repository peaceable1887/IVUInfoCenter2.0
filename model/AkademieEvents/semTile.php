<?php
session_start();
class semTile
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

        return "<a id='linkDescription' href='http://127.0.0.1/wordpress/akademie-events-buchung-schritt-1/?linkDescription".$this->linkVarCount."'>
                <div id='seminarBlock'>
                <p class='seminarBlockText'>
                    <div class='seminarBlockTextVar'> - ".$this->fieldName." - </div>
                    <div class='seminarBlockTextVar'><h4>".$this->semName."</h4></div>
                        <p class='seminarBlockText'>
                    <div class='seminarBlockTextVar' style='float: left;'>" . $this->startDate .
                                            "-".$this->endDate." | ".$this->eventLocation. " </div>
                        </p><br>
                    <p class='seminarBlockText'>
                    <div class='seminarBlockTextVar' style='float: left; line-height: 0.01;'>" . $this->typeName . "</div>
                    </p></div></a>";
    }
}