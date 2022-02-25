<?php


class AkademieModel extends infoCenterDbCon
{
    protected function getEvent($name)
    {
        $sql = "SELECT Event_ID,Seminar_Name, Field_Name, Event_StartDate, Event_EndDate, Event_Location, Seminar_Status
              FROM info_sem
              INNER JOIN info_sem_field ON info_sem_field.Field_ID=info_sem.Seminar_Field
              INNER JOIN info_sem_event ON info_sem_event.Event_Seminar = info_sem.Seminar_ID
              WHERE Event_StartDate >= '$name'AND Seminar_Status = 1
              ORDER BY Event_StartDate ASC";

        $sqlRes = $this->getMySqlQuery($this->dbCon(),$sql);
        $recordCount = $this->getNumRows($sqlRes);
        $_SESSION["recordList"] = $recordCount;
        $arCur = $this->getFetchArray($sqlRes);

            $res = utf8_encode($arCur["Field_Name"]).utf8_encode($arCur["Seminar_Name"]).
                utf8_encode($arCur["Event_StartDate"]).$recordCount;

        echo $recordCount;
        return $res;
    }

}