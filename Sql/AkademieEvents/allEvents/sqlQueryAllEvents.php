<?php
class sqlQueryAllEvents
{
    function sqlQuery_loadASC($currentDate)
    {
        $sql = "SELECT Event_ID,Seminar_Name, Field_Name, Event_StartDate, Event_EndDate, Event_Location, Seminar_Status
              FROM info_sem
              INNER JOIN info_sem_field ON info_sem_field.Field_ID=info_sem.Seminar_Field
              INNER JOIN info_sem_event ON info_sem_event.Event_Seminar = info_sem.Seminar_ID
              WHERE Event_StartDate >= '$currentDate'AND Seminar_Status = 1
              ORDER BY Event_StartDate ASC";

        return $sql;
    }

    function sqlQuery_load_info_sem_field()
    {
        $sql = "SELECT * FROM info_sem_field";

        return $sql;
    }
}