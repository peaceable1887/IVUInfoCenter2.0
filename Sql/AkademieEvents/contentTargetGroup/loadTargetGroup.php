<?php
class loadTargetGroup
{
    function targetGroup($currentDate)
    {
        $sql = "SELECT Seminar_Target, Event_ID,Seminar_Status
                    FROM info_sem
                    INNER JOIN info_sem_event ON info_sem.Seminar_ID=info_sem_event.Event_Seminar   
                    WHERE Event_StartDate >= '$currentDate'AND Seminar_Status = 1 ORDER BY Event_StartDate ASC";

        return $sql;
    }
}