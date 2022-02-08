<?php
class loadTileContent
{
    function tile_content($currentDate)
    {
        $sql = "SELECT Seminar_Name, Field_Name, Event_StartDate, Event_EndDate, Type_Name, Event_Location,Seminar_Status
                      FROM info_sem
                      INNER JOIN info_sem_field ON info_sem_field.Field_ID = info_sem.Seminar_Field
                      INNER JOIN info_sem_event ON info_sem_event.Event_Seminar = info_sem.Seminar_ID
                      INNER JOIN info_sem_type ON info_sem_type.Type_ID = info_sem.Seminar_Type
                      WHERE Event_StartDate >='$currentDate' AND Seminar_Status = 1
                      ORDER BY Event_StartDate ASC, Event_Location DESC, Type_Name ASC";

        return $sql;
    }

}